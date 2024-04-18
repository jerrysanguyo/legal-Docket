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
        Schema::create('docket_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('docket_id')->constrained('dockets');
            $table->date('filing_date');
            $table->integer('filing_number');
            $table->string('remarks');
            $table->foreignId('document_id')->constrained('documents')->nullable();
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
        Schema::dropIfExists('docket_histories');
    }
};
