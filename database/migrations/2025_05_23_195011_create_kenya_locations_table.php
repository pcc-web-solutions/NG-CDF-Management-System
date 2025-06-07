<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code', 3)->unique();
            $table->string('iso_alpha3', 3)->nullable();
            $table->string('currency', 10)->nullable();
            $table->string('timezone')->nullable();
            $table->timestamps();
        });

        Schema::create('counties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('code')->nullable()->unique();
            $table->integer('county_number')->nullable()->unique();
            $table->string('capital')->nullable();
            $table->string('governor')->nullable();
            $table->timestamps();
        });

        Schema::create('sub_counties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('county_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('code')->nullable()->unique();
            $table->string('sub_county_office')->nullable();
            $table->timestamps();
        });

        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_county_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('code')->nullable()->unique();
            $table->integer('ward_number')->nullable();
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ward_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('code')->nullable()->unique();
            $table->string('chief')->nullable();
            $table->timestamps();
        });

        Schema::create('sub_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('code')->nullable()->unique();
            $table->string('assistant_chief')->nullable();
            $table->timestamps();
        });

        Schema::create('villages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_location_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('code')->nullable()->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('villages');
        Schema::dropIfExists('sub_locations');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('wards');
        Schema::dropIfExists('sub_counties');
        Schema::dropIfExists('counties');
        Schema::dropIfExists('countries');
    }
};