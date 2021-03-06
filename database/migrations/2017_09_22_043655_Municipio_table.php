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
 *  Migracion Municipio
 */

class MunicipioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MUNICIPIO_TABLA', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('municipio');
            $table->integer('id_estado');
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
        Schema::dropIfExists('MUNICIPIO_TABLA');
    }
}
