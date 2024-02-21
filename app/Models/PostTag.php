<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = ['tag_id'];
    public $table = 'post_tag';

    public function tag()
    {
        return $this->belongsTo('App\Models\Tag', 'tag_id');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
}
