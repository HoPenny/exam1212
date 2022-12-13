<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $dates = ['enabled_at'];
    protected $fillable = ['title', 'url', 'cgy_id'];
    public function articles()
    {
        return $this->belongsToMany(Article::class)->withTimestamps()->withPivot('color'); //屬於誰的關聯,設Article屬於tag的關聯
    }
}