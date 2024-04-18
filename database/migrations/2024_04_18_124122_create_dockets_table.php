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
        Schema::create('dockets', function (Blueprint $table) {
            $table->id();
            $table->string('court_name');
            $table->string('docket_number');
            $table->date('date_filed');
            $table->date('date_terminated')->nullable();
            $table->foreignId('case')->constrained('case_types');
            $table->string('judge');
            $table->string('status');
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dockets');
    }
};
