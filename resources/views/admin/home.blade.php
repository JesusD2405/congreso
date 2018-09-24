@extends('admin.template.index')

@section('content')

<div class="row">
          
  <div class="col s12 m4 l1">
    
  </div>
  
  <div class="col s12 m12 l10">
    
      <div class="row">

      <div class="col s12 m8">

        <div class="col s12 m6">

          <div class="card blue-grey blue-grey darken-3">
            <div class="card-content white-text">
                <span class="card-title">
                  <i class="medium material-icons left yellow-text">show_chart</i>
                  <h3>{{ $total_dia1 }}</h3>
                </span>
                <p>Total Asistencia - Dia 1</p>
            </div>
          </div>

        </div>

        <div class="col s12 m6">

          <div class="card blue-grey blue-grey darken-3">
            <div class="card-content white-text">
                <span class="card-title">
                  <i class="medium material-icons yellow-text left">trending_up</i>
                  <h3>{{ $total_dia2 }}</h3>
                </span>
                <p>Total Asistencia - Dia 2</p>
            </div>
          </div>

        </div>

        <div class="col s12 m6">
          
          <div class="card blue-grey darken-3">

              <div class="card-content white-text">

                <span class="card-title">
                  <i class="medium material-icons  cyan-text left">insert_chart</i>
                    <h3> {{ $total_asistentes }} </h3>
                  </span>
                
                <p>Asistentes Registrados</p>

              </div>

          </div>

        </div>

        <div class="col s12 m6">
          <div class="card blue-grey darken-3">
                  <div class="card-content white-text">

                      <span class="card-title">
                        
                        <i class="medium material-icons cyan-text left">gavel</i>
                          <h3>{{ $total_mineros }}</h3>
                        </span>
                      
                      <p>Mineros Registrados</p>

                  </div>
                </div>
        </div>

        <div class="col s12 m6">
          <div class="card deep-orange blue-grey darken-3">
                  <div class="card-content white-text">
                      
                      <span class="card-title">
                        <i class="medium material-icons red-text left">record_voice_over</i>
                        <h3>{{ $total_ponentes }}</h3>
                      </span>

                      <p>Ponentes Registrados</p>
                  </div>
                </div>
        </div>

        <div class="col s12 m6">
          <div class="card blue-grey blue-grey darken-3">
                  <div class="card-content white-text">
                      <span class="card-title">
                        <i class="medium material-icons red-text left">person_add</i>
                        <h3>{{ $total_usuarios }}</h3>
                      </span>
                      <p>Total de Usuarios Registrados</p>
                  </div>
                </div>
        </div>

      </div>

      <div class="col s12 m4">
        <div class="card">
                <div class="card-image z-depth-5 blue-grey lighten-5">
                    <img src="{{ asset('images/logo.png') }}">
                </div>
              </div>
      </div>
      </div>

  </div>

  <!--CONTENIDO PRINCIPAL-->
  <div class="col s12 m4 l1">
    
  </div>

</div>

@endsection