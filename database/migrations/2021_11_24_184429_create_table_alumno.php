<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class sCreateTableAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_alumno', function (Blueprint $table) {

            $table->id();
            $table->string('nombre',32);
            $table->string('telefono',16)-nullable();
            $table->string('edad')->nullable();
            $table->string('email',64)->unique();
            $table->string('password',64);
            $table->string('sexo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
