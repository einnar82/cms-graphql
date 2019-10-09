<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Post;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'],
                $dates = ['deleted_at'];

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}

