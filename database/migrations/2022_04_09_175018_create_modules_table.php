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
        Schema::create('modules', function (Blueprint $table) {
            $table->increments(column:'id');
            $table->timestamps();
            $table->string(column:'Libelle');
            $table->boolean(column:'Control');
            $table->boolean(column:'Tp');
            $table->boolean(column:'Examen');
            $table->boolean(column:'Option');
            $table->string(column:'semestre');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
};
