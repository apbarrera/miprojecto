<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('proyectos')) {
            Schema::create('proyectos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('nombre', 191);
                $table->text('descripcion');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
};
