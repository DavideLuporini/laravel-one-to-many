<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
