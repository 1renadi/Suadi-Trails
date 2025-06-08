<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
{
    Schema::table('heritage_sites', function (Blueprint $table) {
        if (Schema::hasColumn('heritage_sites', 'latitude')) {
            $table->dropColumn('latitude');
        }
        if (Schema::hasColumn('heritage_sites', 'longitude')) {
            $table->dropColumn('longitude');
        }
        
       
        if (!Schema::hasColumn('heritage_sites', 'additional_images')) {
            $table->json('additional_images')->nullable()->after('image');
        }
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