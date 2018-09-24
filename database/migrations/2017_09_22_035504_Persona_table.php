<?php

/**
 *  @package        Jornada Tecnologica del Oro.Database.Migrations
 *  
 *  @author         Garcia    Klever. <kfgzbno@gmail.com>.
 *                  Malave    Otto.   <ottoanotnio20@gmail.com>
 *                  Perez     Jesus.  <jesusdavid2405@gmail.com>
 *                  Rojas     Rene.   <renealexander451@gmail.com>
 *                  Velasquez Carlos  <velasqezc@gmail.com>
 *  
 *  @copyright      Todos los derechos reservados. Jornada Tecnologica del Oro. 2017.
 *  
 *  @since          Versión 1.0, revisión 22-07-2017.
 *  @version        1.0
 * 
 *  @final  
 */

 /**
  * Incluye la implementación de los siguientes Librerias
  */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *  Migracion Persona
 */

class PersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        
        Schema::create('PERSONA_TABLA', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula', 10);
            $table->integer('edad');
            $table->string('correo');
            $table->string('telefono', 20);
            $table->char('sexo');
            $table->string('grado_instruccion');
            $table->string('sector_trabajo');
            $table->string('institucion')->nullable();
            $table->string('profesion');
            $table->string('tipo_participacion');
            $table->string('titulo_ponencia')->nullable();
            $table->string('direccion');
            $table->integer('asistencia')->nullable();
            $table->string('estado');
            $table->string('municipio');
            $table->string('parroquia');
            $table->string('ciudad');

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
        Schema::dropIfExists('PERSONA_TABLA');
    }
}
