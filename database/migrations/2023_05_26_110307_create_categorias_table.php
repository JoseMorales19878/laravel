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
        Schema::create('categorias', function (Blueprint $table) {
            $table->charset='utf8mb4';
			$table->collaction='utf8mb4_unicode_ci';
			$table->id();
			$table->string('nombre',20);
			$table->string('codigo',20);
			$table->text('descripcion',20);
			$table->decimal('precio',10,2);
			$table->tinyInteger('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
};
