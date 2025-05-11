<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    public function run()
    {
        Region::create(['name' => 'الجوف']);
        Region::create(['name' => 'الرياض']);
        Region::create(['name' => 'حائل']);
        Region::create(['name' => 'المدينة المنورة']);
        Region::create(['name' => 'المنطقة الشرقية']);
    }
}