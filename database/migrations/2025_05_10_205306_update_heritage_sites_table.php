<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('heritage_sites', function (Blueprint $table) {
            // إزالة الحقلين latitude و longitude
            $table->dropColumn(['latitude', 'longitude']);
            // إضافة حقل details (محتوى كامل)
            $table->text('details')->nullable()->after('description');
            // إضافة حقل additional_images (روابط صور إضافية)
            $table->json('additional_images')->nullable()->after('image');
        });
    }

    public function down()
    {
        Schema::table('heritage_sites', function (Blueprint $table) {
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->dropColumn(['details', 'additional_images']);
        });
    }
};