<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeritageSite extends Model
{
    use HasFactory;

    //اسم الجدولللل
    protected $table = 'heritage_sites';

    // اسماء اعمدة الجدول في قاعدة البيانات الي انشئتها الاخيرة 
    protected $fillable = ['name', 'description', 'region_id', 'image', 'details', 'category', 'additional_images'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    protected $casts = [
        'additional_images' => 'array',
    ];
}
