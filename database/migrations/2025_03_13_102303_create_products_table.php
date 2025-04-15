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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('type');
            $table->integer('primer');
            $table->integer('innerbox');
            $table->integer('outerbox'); // jadi nanti ngambilnya dari id aja
            $table->integer('masterbox');
            $table->string('satuan');
            $table->string('harga_produksi');
            $table->string('harga_jual');
            $table->enum('status', ['producing', 'checking', 'ready'])->default('producing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
