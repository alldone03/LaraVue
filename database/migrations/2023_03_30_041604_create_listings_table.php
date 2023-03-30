<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->unsignedBigInteger('beds');
            $table->unsignedBigInteger('bath');
            $table->unsignedBigInteger('area');

            $table->tinyText('city');
            $table->tinyText('code');
            $table->tinyText('street');
            $table->tinyText('street_nr');

            $table->unsignedInteger('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('listings');

        Schema::dropColumns('', [
            'beds', 'bath', 'area', 'city', 'code', 'street', 'street_nr', 'price'
        ]);
    }
};
