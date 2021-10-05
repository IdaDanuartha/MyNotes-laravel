<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category', 'author'];


    public function scopeFilter($query, array $filters) {
        
        // if( isset($filters['btn-keyword']) ? $filters['btn-keyword'] : false ) {
        //    return $query->where('judul', 'like', '%' . $filters['btn-keyword'] . '%')
        //             ->orWhere('body', 'like', '%' . $filters['btn-keyword'] . '%');
        // }

        $query->when($filters['btn-keyword'] ?? false, function($query, $search) {

            return $query->where('judul', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {

            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}




