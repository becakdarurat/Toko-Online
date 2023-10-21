<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;


class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['User','Category'];
    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like' , '%' . $search . '%')
                        ->orWhere('body', 'like' , '%' . $search . '%');
        });
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query)use($category){ 
                $query->where('slug', $category);
            });     
        });
        $query->when($filters['authors'] ?? false, fn($query, $author)
         => $query->whereHas('User', fn($query) =>
            $query->where('username', $author)
            )
        );
    }
    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
