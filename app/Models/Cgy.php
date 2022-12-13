<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cgy extends Model
{
    use HasFactory;
    protected $dates = ['enabled_at'];
    protected $fillable = ['subject', 'pic', 'desc', 'enabled', 'enabled_at', 'sort'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

}