<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroPage extends Model
{
     protected $fillable=[
        'title','price', 'hero_image','description'
    ];
}
