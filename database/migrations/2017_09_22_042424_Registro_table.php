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
 *  Migracion Registro
 */

class RegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REGISTRO_TABLA', function (Blueprint $table) 
        {
            $table->integer('id_usuario');
            $table->integer('id_persona');
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
        Schema::dropIfExists('REGISTRA_TABLA');
    }
}
