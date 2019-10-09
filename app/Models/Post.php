<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content'],
                $dates = ['deleted_at'];

    
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
    
}
