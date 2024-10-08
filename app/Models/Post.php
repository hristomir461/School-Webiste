<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'image', 'active', 'published_at', 'user_id'];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function shortDescription(): string
    {
        return Str::words(strip_tags($this->description), 30);
    }

    public function getFormattedDate()
    {
        $bulgarianMonths = [
            1 => 'януари',
            2 => 'февруари',
            3 => 'март',
            4 => 'април',
            5 => 'май',
            6 => 'юни',
            7 => 'юли',
            8 => 'август',
            9 => 'септември',
            10 => 'октомври',
            11 => 'ноември',
            12 => 'декември',
        ];
        $date = $this->published_at;

        return $date->day . " " . $bulgarianMonths[$date->month] . " " . $date->year . " г.";
    }

    public function scopeFilter($query, array $filters)
    {

        if($filters['category'] ?? false){
            $category = $filters['category'];
            $query->when(!empty($category), function ($query) use ($category) {
                $query->whereHas('categories', function ($query) use ($category) {
                    $query->where('slug', $category);
                });
            });
        }

        if($filters['search'] ?? false) {
            $search = $filters['search'];
            $query->when(!empty($search), function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%')
                        ->orWhere('slug', 'like', '%' . $search . '%');
                });
            });
        }
    }
}
