<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post() //post_id 
    {
        return $this->belongsTo(Post::class);
    }
    public function author() // needs to be explicit
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
