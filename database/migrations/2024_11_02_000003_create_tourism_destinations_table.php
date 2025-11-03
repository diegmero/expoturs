<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tourism_destinations', function (Blueprint $table) {
            $table->id();
            $table->integer('destination_number')->unique();
            $table->boolean('is_reserved')->default(false);
            $table->string('company_name')->nullable();
            $table->string('person_name')->nullable();
            $table->date('reservation_date')->nullable();
            $table->date('entry_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tourism_destinations');
    }
};
