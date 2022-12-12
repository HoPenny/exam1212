<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ArticleTag extends Pivot
{
    use HasFactory;
    protected $fillable = ['article_id', 'tag_id', 'color'];
}