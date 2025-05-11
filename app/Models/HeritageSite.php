<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeritageSite extends Model
{
    use HasFactory;

protected $fillable = ['name', 'description', 'image', 'details'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    protected $casts = [
        'additional_images' => 'array',
    ];
}