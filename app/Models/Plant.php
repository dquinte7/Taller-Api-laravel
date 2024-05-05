<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'scientific_name',
        'description',
        'image',
        'color',
        'size',
        'count',
        'price',
        'height',
        'width',
    ];
}
