<?php

/**
 *  @package        Jornada Tecnologica del Oro.APP.MODELOS
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

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
  * Modelo PERSONA
  */

class PERSONA extends Model
{
	protected $table = "PERSONA_TABLA";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'nombre', 'apellido', 'cedula', 'edad', 'correo', 'telefono', 'sexo', 'grado_instruccion', 'sector_trabajo', 'institucion', 'profesion', 'tipo_participacion', 'titulo_ponencia', 'direccion', 'asistencia', 'estado', 'municipio', 'parroquia', 'ciudad',];

    
}
