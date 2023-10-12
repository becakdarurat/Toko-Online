<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}
