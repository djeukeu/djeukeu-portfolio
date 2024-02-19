<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasUlids;

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function post_tags()
    {
        return $this->hasMany('App\Models\PostTag');
    }
}
