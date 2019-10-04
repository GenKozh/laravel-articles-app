<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'author_name',
        'title',
        'article_text'
    ];
    //
}
