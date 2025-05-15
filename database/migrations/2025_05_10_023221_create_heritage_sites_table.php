<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeritageSitesTable extends Migration
{
    public function up()
    {
        Schema::create('heritage_sites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('region_id')->nullable();
            $table->string('image');
            $table->text('details')->nullable();
            $table->string('category')->nullable();
            $table->json('additional_images')->nullable();
            $table->timestamps();

            $table->foreign('region_id')->references('id')->on('regions')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('heritage_sites');
    }
}