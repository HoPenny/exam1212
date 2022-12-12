<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function articles()
    {

        return $this->belongsToMany(Article::class); //屬於誰的關聯,設Cgy屬於Article的關聯
    }
}