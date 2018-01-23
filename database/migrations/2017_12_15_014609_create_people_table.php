<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id'); 
            $table->text('lugar');
            $table->date('fecha');
            $table->text('razonSocial');
            $table->text('cooperativa');
            $table->text('codigoCooperativa');
            $table->text('primerApellido');
            $table->text('segundoApellido');
            $table->text('casadaApellido');
            $table->text('primerNombre');
            $table->text('segundoNombre');
            $table->text('tercerNombre');
            $table->date('fechaNacimiento');
            $table->text('nacionalidad');
            $table->text('otraNacionalidad');
            $table->text('lugarNacimiento');
            $table->text('condicionMigratoria');
            $table->text('genero');
            $table->text('estadoCivil');
            $table->text('profesionOficio');
            $table->text('tipoDocumentoIdentificacion');
            $table->bigInteger('numeroIdentificacion'); 
            $table->text('departamentoEmision');
            $table->text('municipioEmision');
            $table->text('paisEmision');
            $table->text('nit');
            $table->text('email');
            $table->text('zonaDireccion');
            $table->text('departamentoDireccion');
            $table->text('municipioDireccion');
            $table->text('paisDireccion');
            $table->text('tipoSolicitante');
            $table->text('pepRepresentante');
            $table->text('cpeRepresentante');
            $table->bigInteger('person_id'); //oreja de coche llaves foranenas van singular_id
            $table->text('pepSolicitante');
            $table->text('pepOrigen');
            $table->text('cpe');
            $table->bigInteger('telFijo');
            $table->bigInteger('telMovil');
           
            $table->timestamps();//  timestamp solo es un comanndo para poner UPdate_at y create_at no se usa para nada mas

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
