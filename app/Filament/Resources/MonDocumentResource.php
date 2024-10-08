<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MonDocumentResource\Pages;
use App\Filament\Resources\MonDocumentResource\RelationManagers;
use App\Models\MonDocument;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


class MonDocumentResource extends Resource
{
    protected static ?string $model = MonDocument::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(2048)
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('file')
                                    ->required()
                                    ->directory('mon-files')
                                    ->acceptedFileTypes(['application/pdf', 'image/*', 'text/plain', 'application/msword'])
                                    ->reactive()
                                    ->afterStateUpdated(function ($set, $state) {
                                        $extension = pathinfo($state->getClientOriginalName(), PATHINFO_EXTENSION);
                                        $set('extension', $extension);
                                    })
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('extension')
                                    ->readonly(),
                                Forms\Components\DateTimePicker::make('date')
                                    ->required(),
                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageMonDocuments::route('/'),
        ];
    }
}
