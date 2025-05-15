<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HeritageCategories extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('heritage_categories')) {
            Schema::create('heritage_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description')->nullable();
                $table->string('image')->nullable();
                $table->json('additional_images')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('heritage_categories');
    }
}
