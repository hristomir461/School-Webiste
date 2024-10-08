<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Filament\Resources\TeacherResource\RelationManagers;
use App\Models\Teacher;
use App\Models\TeacherClass;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('names')
                    ->required()
                    ->maxLength(2048),
                Select::make('class')
                    ->required()
                    ->options([
                        TeacherClass::TEACHER_STAFF => 'СПИСЪК НА ПЕДАГОГИЧЕСКИЯ СЪСТАВ',
                        TeacherClass::SOCIAL_SCIENCES => 'ОБЩЕСТВЕНИ НАУКИ, ГРАЖДАНСКО ОБРАЗОВАНИЕ И РЕЛИГИЯ',
                        TeacherClass::FOREIGN_LANGUAGES => 'ЧУЖДИ ЕЗИЦИ',
                        TeacherClass::BG_LANGUAGE_LITERATURE => 'БЪЛГАРСКИ ЕЗИК И ЛИТЕРАТУРА',
                        TeacherClass::MATHEMATICS_INFORMATICS => 'МАТЕМАТИКА, ИНФОРМАТИКА И ИНФОРМАЦИОННИ ТЕХНОЛОГИИ',
                        TeacherClass::NATURAL_SCIENCES => 'ПРИРОДНИ НАУКИ И ЕКОЛОГИЯ',
                        TeacherClass::PHYSICAL_EDUCATION => 'ФИЗИЧЕСКО ВЪЗПИТАНИЕ И СПОРТ',
                        TeacherClass::PROFESSIONAL_PREPARATION => 'ЗАДЪЛЖИТЕЛНА ПРОФЕСИОНАЛНА ПОДГОТОВКА (ЗПП)',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        function getClassText($classValue) {
            $classMap = [
                TeacherClass::TEACHER_STAFF => 'СПИСЪК НА ПЕДАГОГИЧЕСКИЯ СЪСТАВ',
                TeacherClass::SOCIAL_SCIENCES => 'ОБЩЕСТВЕНИ НАУКИ, ГРАЖДАНСКО ОБРАЗОВАНИЕ И РЕЛИГИЯ',
                TeacherClass::FOREIGN_LANGUAGES => 'ЧУЖДИ ЕЗИЦИ',
                TeacherClass::BG_LANGUAGE_LITERATURE => 'БЪЛГАРСКИ ЕЗИК И ЛИТЕРАТУРА',
                TeacherClass::MATHEMATICS_INFORMATICS => 'МАТЕМАТИКА, ИНФОРМАТИКА И ИНФОРМАЦИОННИ ТЕХНОЛОГИИ',
                TeacherClass::NATURAL_SCIENCES => 'ПРИРОДНИ НАУКИ И ЕКОЛОГИЯ',
                TeacherClass::PHYSICAL_EDUCATION => 'ФИЗИЧЕСКО ВЪЗПИТАНИЕ И СПОРТ',
                TeacherClass::PROFESSIONAL_PREPARATION => 'ЗАДЪЛЖИТЕЛНА ПРОФЕСИОНАЛНА ПОДГОТОВКА (ЗПП)',
            ];

            return $classMap[$classValue] ?? 'Unknown Class';
        }
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('names')
                    ->searchable(),
                Tables\Columns\TextColumn::make('class')
                    ->searchable()
                    ->formatStateUsing(fn ($state) => getClassText($state)),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}
