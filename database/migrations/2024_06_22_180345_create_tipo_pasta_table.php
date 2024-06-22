<?php
// database/migrations/xxxx_xx_xx_create_tipo_pasta_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoPastaTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_pasta', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_pasta');
    }
}
