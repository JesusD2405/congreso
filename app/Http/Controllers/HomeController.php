<?php

/**
 *  @package        Jornada Tecnologica del Oro.App.Http.Controllers
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

namespace App\Http\Controllers;

use App\PERSONA;
use Illuminate\Http\Request;

/**
 * Controlador Home
 */

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Funcion que retorna a la vista administrativa
     *
     * @return View Admin.Index (Vista Administrativa)
     */
    public function index()
    {
        // Contamos el total de ponentes registrados en la BD
        $ponentes   = PERSONA::where('tipo_participacion', 'Ponente')->count();

        // Contamos el total de mineros registrados en la BD
        $mineros    = PERSONA::where('sector_trabajo', 'Mineria No Metalica')->orWhere('sector_trabajo', 'Pequeña Mineria')->count();

        // Contamos el total de asistentes registrados en la BD
        $asistentes = PERSONA::where('tipo_participacion', 'Asistente')->count();

        // Contamos el total de usuarios registrados en la BD
        $usuarios = PERSONA::all()->count();


        return view('admin.home', [ 'total_ponentes'   => $ponentes,
                                    'total_mineros'    => $mineros,
                                    'total_asistentes' => $asistentes,
                                    'total_usuarios'   => $usuarios    ]);
    }
}
