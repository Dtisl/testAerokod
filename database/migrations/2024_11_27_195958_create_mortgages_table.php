<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mortgages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('is_active')->default(false);
            $table->string('description')->nullable();
            $table->unsignedSmallInteger('percent');
            $table->unsignedInteger('min_first_payment');
            $table->float('max_price');
            $table->float('min_price');
            $table->unsignedInteger('min_term');
            $table->unsignedInteger('max_term');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mortgages');
    }
};
