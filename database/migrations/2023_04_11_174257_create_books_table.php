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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('description')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('isbn')->nullable(true);
            $table->bigInteger('stock',0);

            $table->unsignedBigInteger('book_category_id');
            $table->foreign('book_category_id')
            ->references('id')->on('book_categories')->onDelete('cascade');

            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')
            ->references('id')->on('authors')->onDelete('cascade');

            $table->unsignedBigInteger('publisher_id');
            $table->foreign('publisher_id')
            ->references('id')->on('publishers')->onDelete('cascade');

            $table->decimal('price',8,2);        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
