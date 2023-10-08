<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['User','Categories'];
    public function categories(){
        return $this->belongsTo(Categories::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
