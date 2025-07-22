<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('reference_code')->nullable();
            $table->string('operation_code')->nullable();

            // Location Info
            $table->foreignId('nation_id')->constrained()->onDelete('cascade');
            $table->foreignId('region_id')->constrained()->onDelete('cascade');

            // Classification
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_id')->constrained()->onDelete('cascade');
            $table->foreignId('operation_status_id')->constrained()->onDelete('cascade');
            $table->foreignId('sector_id')->constrained()->onDelete('cascade');

            // Operation Details
            $table->string('type_of_system')->nullable();
            $table->string('type_of_operation')->nullable();

            // Value (Flexible Range)
           $table->string('value_from')->nullable();  
           $table->string('value_to')->nullable();  

            // Assets
            $table->string('images')->nullable(); // Multiple image paths
            $table->text('pdf')->nullable();  // Single PDF file

            // State
            $table->enum('buy_sell', ['buy', 'sell'])->default('sell');
            $table->boolean('is_active')->default(true);

            // System Fields
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void {
        Schema::dropIfExists('products');
    }
};
