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

use App\ROL;
use App\PERSONA;
use App\REGISTRO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

/**
 * Controlador Persona
 */

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.registro.registro');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $user = new PERSONA($request->all());

        $user->asistencia= 1;

        $user->save();

        return view('admin.registro.registro');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function personList()
    {
        $usuarios = DB::table('PERSONA_TABLA')->paginate(10);

        return view('admin.listar.listar',['usuarios' => $usuarios,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
