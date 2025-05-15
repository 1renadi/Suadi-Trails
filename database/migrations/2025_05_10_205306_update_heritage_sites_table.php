<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('heritage_sites', function (Blueprint $table) {
            // Check if columns exist before dropping
            if (Schema::hasColumn('heritage_sites', 'latitude')) {
                $table->dropColumn('latitude');
            }
            if (Schema::hasColumn('heritage_sites', 'longitude')) {
                $table->dropColumn('longitude');
            }
            // Add details and additional_images columns
            $table->text('details')->nullable()->after('description');
            $table->json('additional_images')->nullable()->after('image');
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