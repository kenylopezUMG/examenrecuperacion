<?php

// database/migrations/xxxx_xx_xx_create_libros_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->string('isbn')->primary();
            $table->string('titulo_libro');
            $table->string('año_publicacion');
            $table->string('autor');
            $table->string('clasificación');
            $table->string('cantidad_de_páginas');
            $table->unsignedBigInteger('id_tipo_pasta');
            $table->foreign('id_tipo_pasta')->references('id')->on('tipo_pasta')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
