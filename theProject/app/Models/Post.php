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
        return $this->belongsToMany(Category::class, 'categories_posts', 'category_id', 'post_id');
    }

    public function shortDescription(): string
    {
        return Str::words(strip_tags($this->description), 30);
    }

    public function getFormattedDate()
    {
        return $this->published_at->format('F jS Y');
    }

    public function scopeFilter($query, array $filters)
    {

        if($filters['category'] ?? false){
            $category = $filters['category'];
            $query->when(!empty($category), function ($query) use ($category) {
                $query->whereHas('categories', function ($query) use ($category) {
                    $query->where('title', $category);
                });
            });
        }

        if($filters['search'] ?? false) {
            $search = $filters['search'];
            $query->when(!empty($search), function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%');
                });
            });
        }
    }
}
