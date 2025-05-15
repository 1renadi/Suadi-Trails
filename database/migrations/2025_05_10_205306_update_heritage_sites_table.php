<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
{
    Schema::table('heritage_sites', function (Blueprint $table) {
        // إزالة الأعمدة إذا كانت موجودة (بأمان)
        if (Schema::hasColumn('heritage_sites', 'latitude')) {
            $table->dropColumn('latitude');
        }
        if (Schema::hasColumn('heritage_sites', 'longitude')) {
            $table->dropColumn('longitude');
        }
        
        // إضافة الأعمدة الجديدة فقط إذا لم تكن موجودة
       
        if (!Schema::hasColumn('heritage_sites', 'additional_images')) {
            $table->json('additional_images')->nullable()->after('image');
        }
    });
}

    public function down()
    {
        Schema::table('heritage_sites', function (Blueprint $table) {
            // Restore latitude and longitude if they were dropped
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            // Drop the added columns
            $table->dropColumn(['details', 'additional_images']);
        });
    }
};