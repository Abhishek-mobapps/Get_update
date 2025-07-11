<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
    
    Schema::create('products', function (Blueprint $table) {
    $table->id();


    $table->string('title'); // e.g. "Property for Sale"
    $table->text('description')->nullable();

    $table->string('reference_code')->nullable(); // e.g. Ref. 202506060922
    $table->string('operation_code')->nullable(); // e.g. Independent office in Bergamo


    $table->string('nation')->nullable();   // e.g. Italy
    $table->string('region')->nullable();   // e.g. Lombardy


    $table->string('sector')->nullable();   // e.g. Real Estate
    $table->enum('type_of_system', ['Sale', 'Rent', 'Lease'])->default('Sale');
    $table->string('type_of_operation')->nullable(); // e.g. Real Estate Sale


    $table->decimal('min_value', 12, 2)->nullable(); // From €
    $table->decimal('max_value', 12, 2)->nullable(); // To €


    $table->enum('buy_sell', ['buy', 'sell'])->default('sell');
    $table->boolean('is_active')->default(true); // for state dot (green/active)


    $table->json('images')->nullable(); // store multiple image paths
    $table->json('pdfs')->nullable();   // store multiple pdf paths


    $table->foreignId('category_id')->constrained()->onDelete('cascade');
    $table->foreignId('type_id')->constrained()->onDelete('cascade');
    $table->foreignId('operation_status_id')->constrained()->onDelete('cascade');

    $table->foreignId('nation_id')->constrained()->onDelete('cascade');
    $table->foreignId('region_id')->constrained()->onDelete('cascade');

    $table->timestamps();
    $table->softDeletes();
});

    }

    public function down(): void {
        Schema::dropIfExists('products');
    }
};
