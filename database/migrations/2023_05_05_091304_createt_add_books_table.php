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
        Schema::create('add_books', function(Blueprint $table){
            $table->string("book_id",30)->primary();
            $table->string("book_name",90);
            $table->string("author",120);
            $table->string("category",100);
            $table->string("isbn",150);
            $table->string("edition",50);
            $table->string("page",10);
            $table->string("publisher",150);
            $table->string("image",200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
