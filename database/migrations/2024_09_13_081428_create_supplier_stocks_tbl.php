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
        Schema::create('supplier_stocks_tbl', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id');
            $table->string('product_name');
            $table->integer('product_type_id');
            $table->string('brand');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_stocks_tbl');
    }
};
