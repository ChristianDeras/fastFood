<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->integer('id_inventario')->primary();
            $table->string('Nombre_articulo', 100)->nullable();
            $table->integer('Stock')->nullable();
            $table->string('CodigoBarra', 50)->nullable();
            $table->integer('id_sucursal')->nullable()->index('id_sucursal');
            $table->integer('id_categoria')->nullable()->index('id_categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
};
