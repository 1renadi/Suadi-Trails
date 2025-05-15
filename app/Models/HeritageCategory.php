<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeritageCategory extends Model
{
    protected $fillable = ['name', 'description', 'image', 'additional_images'];
    protected $casts = [
        'additional_images' => 'array',
    ];
}
