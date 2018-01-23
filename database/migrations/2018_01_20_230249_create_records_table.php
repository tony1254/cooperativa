<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('persona_id'); 
            $table->text('fuente');    
            $table->text('empresa');    
            $table->text('puesto');    
            $table->text('direccion');    
            $table->enum('actividad', ['comercio', 'industria','servicios_profesionales','sector_publico']);
            $table->text('nombreNegocio');    
            $table->text('nitNegocio');    
            $table->date('fechaInicioOperaciones');    
            $table->text('tipoNegocio');    
            $table->text('direccionNegocio');    
            $table->text('proveedores');
            $table->enum('monedaIngresos', ['quetzal', 'dolar','euro']);
            $table->enum('monedaEgresos', ['quetzal', 'dolar','euro']);
            $table->enum('intervaloIngresos', ['0.01-3,000.00', '3,000.01-10,000.00','10,000.01-50,000.00','50,000.01-100,000.00', '100,000.01-200,000.00','200,000.01-indicarMonto']);
            $table->enum('intervaloEgresos', ['0.01-3,000.00', '3,000.01-10,000.00','10,000.01-50,000.00','50,000.01-100,000.00', '100,000.01-200,000.00','200,000.01-indicarMonto']);
            $table->bigInteger('telEmpresa'); 







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
        Schema::dropIfExists('records');
    }
}
