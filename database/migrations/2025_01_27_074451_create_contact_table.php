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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Primary Key: auto-increment ID
            $table->string('name'); // Contact Name
            $table->string('email')->unique(); // Email Address
            $table->string('phone')->nullable(); // Phone Number
            $table->text('address')->nullable(); // Address
            $table->string('company')->nullable(); // Company Name
            $table->string('position')->nullable(); // Job Position
            $table->text('notes')->nullable(); // Notes about the contact
            $table->timestamps(); // Created at and Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
