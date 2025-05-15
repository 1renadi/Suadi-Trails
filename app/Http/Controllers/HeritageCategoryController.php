<?php
namespace App\Http\Controllers;

use App\Models\HeritageCategory;
use Illuminate\Http\Request;

class HeritageCategoryController extends Controller
{
    public function index()
    {
        $categories = HeritageCategory::all();
        // الإشارة إلى المسار الصحيح لصفحة Turath (index.blade.php)
        return view('categoryHeritage.index', compact('categories'));
    }

    public function show($id)
    {
        $category = HeritageCategory::findOrFail($id);
        // تحديد اسم الصفحة الفرعية بناءً على الفئة
        $categoryView = match ($category->name) {
            'التراث المادي (التاريخي والأثري)' => 'tangible',
            'التراث غير المادي (العادات والتقاليد)' => 'intangible',
            'التراث الديني' => 'religious',
            'التراث الطبيعي' => 'natural',
            'التراث البحري' => 'maritime',
            'الأزياء التقليدية' => 'costumes',
            'الفلكلور والأهازيج' => 'folklore',
            default => 'show', // صفحة افتراضية إذا لم تتطابق الفئة
        };
        // الإشارة إلى المسار الصحيح للصفحات الفرعية
        return view("categoryHeritage.{$categoryView}", compact('category'));
    }
}
