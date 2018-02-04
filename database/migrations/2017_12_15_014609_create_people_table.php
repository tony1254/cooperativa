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
            $table->bigInteger('user_id')->nullable()   ; 
            $table->text('lugar')->nullable()   ;
            // $table->date('fecha')->nullable()   ; se cancelo porque va en el create_at
            $table->text('razonSocial')->nullable() ;
            $table->text('cooperativa')->nullable() ;
            $table->text('codigoCooperativa')->nullable()   ;
            $table->text('primerApellido')  ;
            $table->text('segundoApellido')->nullable() ;
            $table->text('casadaApellido')->nullable()  ;
            $table->text('primerNombre')->nullable()    ;
            $table->text('segundoNombre')->nullable()   ;
            $table->text('tercerNombre')->nullable()    ;
            $table->date('fechaNacimiento')->nullable() ;
            $table->text('nacionalidad')->nullable()    ;
            $table->text('otraNacionalidad')->nullable()    ;
            $table->text('lugarNacimiento')->nullable() ;
            $table->text('condicionMigratoria')->nullable() ;
            $table->text('genero')->nullable()  ;
            $table->text('estadoCivil')->nullable() ;
            $table->text('profesionOficio')->nullable() ;
            $table->text('tipoDocumentoIdentificacion')->nullable() ;
            $table->bigInteger('numeroIdentificacion')->nullable()  ; 
            $table->text('departamentoEmision')->nullable() ;
            $table->text('municipioEmision')->nullable()    ;
            $table->text('paisEmision')->nullable() ;
            $table->text('nit')->nullable() ;
            $table->text('email')->nullable()   ;
            $table->text('zonaDireccion')->nullable()   ;
            $table->text('departamentoDireccion')->nullable()   ;
            $table->text('municipioDireccion')->nullable()  ;
            $table->text('paisDireccion')->nullable()   ;
            $table->text('tipoSolicitante')->nullable() ;
            $table->text('pepRepresentante')->nullable()    ;
            $table->text('cpeRepresentante')->nullable()    ;
            $table->bigInteger('person_id')->nullable() ; //oreja de coche llaves foranenas van singular_id
            $table->text('pepSolicitante')->nullable()  ;
            $table->text('pepOrigen')->nullable()   ;
            $table->text('cpe')->nullable() ;
            $table->bigInteger('telFijo')->nullable()   ;
            $table->bigInteger('telMovil')->nullable()  ;
           
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
