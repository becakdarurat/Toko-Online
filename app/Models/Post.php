<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Categories;


class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['User','Categories'];
    public function Categories(){
        return $this->belongsTo(Categories::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
