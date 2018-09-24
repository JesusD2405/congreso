@extends('admin.template.index')

@section('content')
	
<div class="row">
          <div class="col s12 m4 l1"></div>
          <div class="col s12 m12 l10">
          <div class="row">
            <div class="container z-depth-3">

              <form class="col s12" method="post" action="{{ route('registro.store') }}">
                {{ csrf_field() }}

                <h5><strong class="green-text">Datos Personales</strong></h5>

                <div class="row">
                  
                  <div class="input-field col s4">
                    <input name="nombre" type="text" class="validate" required>
                    <label for="nombre">Nombre</label>
                  </div>

                  <div class="input-field col s4">
                    <input name="apellido" type="text" class="validate" required>
                    <label for="Apellido">Apellido</label>
                  </div>
                  
                  <div class="input-field col s4">
                    <input name="cedula" type="text" class="validate" required>
                    <label for="Cedula">Cedula</label>
                  </div>
                
                </div>

                <div class="row">

                  <div class="input-field col s4">
                    <input name="edad" type="number" class="validate" required>
                    <label for="Edad">Edad</label>
                  </div>

                  <div class="input-field col s4">
                    <input name="correo" type="email" class="validate" required>
                    <label for="correo">Correo</label>
                  </div>
                  
                  <div class="input-field col s4">
                    <input name="telefono" type="text" class="validate" required>
                    <label for="Telefono">Telefono</label>
                  </div>

                  <div class="input-field offset-s4 col s4">
                      <input class="with-gap" name="sexo" id="test1" type="radio" value="M" />
                      <label for="test1">Masculino</label>
                      <input class="with-gap" name="sexo" id="test2" type="radio" value="F"  />
                      <label for="test2">Femenino</label>
                    </div>

                </div>

                <br><br>

                <div class="row">

                  <div class="input-field col s4">
                    <select name="grado_instruccion" required>
                      <option disabled selected>Grado de instruccion</option>
                      <option name="grado_instruccion[1]" value="Primaria"> Primaria </option>
                      <option name="grado_instruccion[2]" value="Secundaria"> Secundaria </option>
                      <option name="grado_instruccion[3]" value="Universitaria"> Universitaria </option>
                    </select>
                    <label>Grado de instruccion</label>
                  </div>

                  <div class="input-field col s4">
                    <select name="sector_trabajo" required>
                      <option disabled selected>Sector de trabajo</option>
                      <option name="sector_trabajo[1]" value="Salud"> Salud </option>
                      <option name="sector_trabajo[2]" value="Educacion Basica"> Educacion Basica </option>
                      <option name="sector_trabajo[3]" value="Mineria No Metalica"> Mineria No Metalica </option>
                      <option name="sector_trabajo[4]" value="Universitaria"> Universitario </option>
                      <option name="sector_trabajo[5]" value="Pequeña Mineria"> Pequeña Mineria </option>
                      <option name="sector_trabajo[6]" value="Plantas Auriferas"> Plantas Auriferas </option>
                      <option name="sector_trabajo[7]" value="Empresas del Estado"> Empresas del Estado </option>
                      <option name="sector_trabajo[8]" value="Organizaciones Privadas"> Organizaciones Privadas </option>
                      <option name="sector_trabajo[9]" value="Entes e Instituciones Publicas"> Entes e Instituciones Publicas </option>
                      <option name="sector_trabajo[10]" value="Otro"> Otro </option>
                      <option name="sector_trabajo[11]" value="No Aplica"> No Aplica </option>
                    </select>
                    <label>Sector de trabajo</label>
                  </div>

                  <div class="input-field col s4">
                    <input name="institucion" type="text" class="validate" />
                    <label for="institucion">Nombre de la Institucion</label>
                  </div>

                  <div class="input-field col s4">
                    <input name="profesion" type="text" class="validate" required>
                    <label for="profesion">Profesion u Oficio</label>
                  </div>

                  <div class="input-field col s4">
                    <select name="tipo_participacion" required>
                      <option disabled selected>Tipo de Participacion</option>
                      <option name="tipo_participacion[1]" value="Ponente"> Ponente </option>
                      <option name="tipo_participacion[2]" value="Asistente"> Asistente </option>
                      <option name="tipo_participacion[3]" value="Organizador"> Organizador </option>
                      <option name="tipo_participacion[4]" value="Colaborador"> Colaborador </option>
                    </select>
                    <label>Tipo de Participacion</label>
                  </div>

                  <div class="input-field col s4">
                    <input name="titulo_ponencia" type="text" class="validate" />
                    <label for="titulo_ponencia">Titulo de la Ponencia</label>
                  </div>

                </div>

                <br>
                <h5><strong class="green-text">Ubicacion</strong></h5>
                <br>

                <div class="row">
                  <div class="input-field col s3">
                    <input name="estado" type="text" class="validate" required>
                    <label for="estado">Estado</label>
                  </div>
                  
                  <div class="input-field col s3">
                    <input name="municipio" type="text" class="validate" required>
                    <label for="municipio">Municipio</label>
                  </div>
                

                  <div class="input-field col s3">
                    <input name="parroquia" type="text" class="validate" required>
                    <label for="parroquia">Parroquia</label>
                  </div>

                  <div class="input-field col s3">
                    <input name="ciudad" type="text" class="validate" required>
                    <label for="ciudad">Ciudad</label>
                  </div>

                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <textarea name="direccion" class="materialize-textarea" required></textarea>
                    <label for="Direccion">Direccion</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 center-align">
                    <button class="btn waves-effect waves-light" type="submit">Guardar 
                      <i class="material-icons right">save</i>
                    </button>
                  </div>
                </div>

              </form>

            </div>
            </div>
          <!--CONTENIDO PRINCIPAL-->
          <div class="col s12 m4 l1"></div>

        </div>

@endsection