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
        Schema::create('public.projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->json('image');
            $table->text('description');
            $table->string('dtCreation')->nullable();
            $table->boolean('avaliable')->default(TRUE)->nullable(); //PARA PROJETOS INATIVOS
            $table->json('responsible_agency')->nullable();
            $table->string('current_link')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
