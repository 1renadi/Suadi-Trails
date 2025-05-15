<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeritageSite extends Model
{
    use HasFactory;

    // تحديد اسم الجدول إذا لم يكن الافتراضي
    protected $table = 'heritage_sites';

    // إضافة category إلى الحقول القابلة للتعبئة
    protected $fillable = ['name', 'description', 'region_id', 'image', 'details', 'category', 'additional_images'];

    // العلاقة مع Region
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    // تحويل additional_images إلى مصفوفة
    protected $casts = [
        'additional_images' => 'array',
    ];
}
