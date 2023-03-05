<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();//unique este metodo es para que el registro no se pueda repetir
            $table->timestamp('email_verified_at')->nullable(); //la propieda nullable indica que el dato puede quedar vacio
            $table->string('password');
            $table->string('avatar');
            $table->rememberToken();
            $table->timestamps();//timestamps este meto es para almacenar hora y fecha que se creo el registro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');//dropIfExists() este metodo puede eliminar la tabla se utiliza para revertir
    }
}
