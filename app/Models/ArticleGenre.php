<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleGenre extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'genre_id'];
}
