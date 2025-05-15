<?php
// database/seeders/HeritageCategorySeeder.php
namespace Database\Seeders;

use App\Models\HeritageCategory;
use Illuminate\Database\Seeder;

class HeritageCategorySeeder extends Seeder
{
    public function run()
    {
        HeritageCategory::truncate();
        $categories = [
            [
                'name' => 'التراث المادي (التاريخي والأثري)',
                'description' => 'يشمل المباني التاريخية مثل القلاع، الأسوار، والمواقع الأثرية التي تعكس تاريخ المملكة العريق. تتميز هذه المواقع بتصاميمها المعمارية الفريدة التي تحكي قصص الأجداد.',
                'image' => 'images/tangible_heritage.jpg',
                'additional_images' => ['images/tangible_1.jpg', 'images/tangible_2.jpg'],
            ],
            [
                'name' => 'التراث غير المادي (العادات والتقاليد)',
                'description' => 'يشمل العادات والتقاليد مثل الرقصات الشعبية، الأمثال، والقصص الشفوية التي تنتقل عبر الأجيال.',
                'image' => 'images/intangible_heritage.jpg',
                'additional_images' => ['images/intangible_1.jpg', 'images/intangible_2.jpg'],
            ],
            [
                'name' => 'التراث الديني',
                'description' => 'يشمل المساجد التاريخية والمواقع الدينية التي تحمل قيمة روحية وتاريخية كبيرة.',
                'image' => 'images/religious_heritage.jpg',
                'additional_images' => ['images/religious_1.jpg', 'images/religious_2.jpg'],
            ],
            [
                'name' => 'التراث الطبيعي',
                'description' => 'يشمل المناظر الطبيعية مثل الجبال، الصحاري، والمحميات الطبيعية التي تعكس جمال الطبيعة.',
                'image' => 'images/natural_heritage.jpg',
                'additional_images' => ['images/natural_1.jpg', 'images/natural_2.jpg'],
            ],
            [
                'name' => 'التراث البحري',
                'description' => 'يشمل التراث المرتبط بالبحر مثل أدوات الصيد التقليدية والسفن القديمة.',
                'image' => 'images/maritime_heritage.jpg',
                'additional_images' => ['images/maritime_1.jpg', 'images/maritime_2.jpg'],
            ],
            [
                'name' => 'الأزياء التقليدية',
                'description' => 'يشمل الملابس التقليدية مثل الثوب السعودي والحلي التقليدية التي تعكس ثقافة المناطق المختلفة.',
                'image' => 'images/traditional_costumes.jpg',
                'additional_images' => ['images/costumes_1.jpg', 'images/costumes_2.jpg'],
            ],
            [
                'name' => 'الفلكلور والأهازيج',
                'description' => 'يشمل الأهازيج الشعبية، الرقصات التقليدية مثل العرضة، والقصص الفلكلورية.',
                'image' => 'images/folklore.jpg',
                'additional_images' => ['images/folklore_1.jpg', 'images/folklore_2.jpg'],
            ],
        ];

        foreach ($categories as $category) {
            HeritageCategory::updateOrCreate(['name' => $category['name']], $category);
        }
    }
}
