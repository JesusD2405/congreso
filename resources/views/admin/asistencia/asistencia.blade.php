@extends('admin.template.index')

@section('content')
	
<div class="row">
  <div class="col s12 m4 l1"></div>
  <div class="col s12 m12 l10">
  <div class="row">
    <div class="container z-depth-3">

      <form class="col s12" method="post" action="{{ route('asistencia.store') }}">
        {{ csrf_field() }}

        <h5><strong class="green-text">Verificar Asistencia</strong></h5>

        <div class="row">
          
          <div class="input-field col s6">
            <input name="cedula" type="text" class="validate" required>
            <label for="Cedula">Cedula</label>
          </div>
        
        </div>

        <div class="row">
          <div class="input-field col s12 center-align">
            <button class="btn waves-effect waves-light" type="submit">Verificar
              <i class="material-icons right">done_all</i>
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