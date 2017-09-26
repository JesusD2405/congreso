  
  {{--

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

  --}}

  <!DOCTYPE html>
  <html>

    <head>

      <title>Jornada Tecnologica del Oro 2017</title>
      <link rel="shortcut icon" type="image/x-icon" href="">
      <meta name="author" content="Garcia, Klever - Malave, Otto - Perez, Jesus - Rojas,  Rene - Velasquez, Carlos">
      <meta name="description" content="Sistema Personalizado MarioAndres">
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--Import materialize.css-->
      <link rel="stylesheet" href="{{ asset('frameworks/materialize/css/materialize.min.css') }}"  media="screen,projection"/>
      <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>

    <header>

      <section id="navbar">

          <div class="row">

          <div class="navbar-fixed">
            <nav>
              <div class="nav-wrapper blue-grey darken-4">
                <a href="{{ url('admin/home') }}" class="brand-logo center">Evento de Mineria</a>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="#" class="dropdown-button" data-activates="dropdown1"><i class="material-icons left">account_circle</i>John Doe</a></li>
                    <ul id='dropdown1' class='dropdown-content'>
                      <li>
                  
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Salir">
                              Cerrar Sesion
                        </a>

                      </li>
                    </ul>
                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

                <ul class="left hide-on-med-and-down">
                  <li><a href="{{ url('admin/home') }}"><i class="material-icons left">home</i>Inicio</a></li>
                  <li><a href="{{ url('admin/registro') }}"><i class="material-icons left">group_add</i>Registro</a></li>
                  <li><a href="{{ url('admin/listar') }}"><i class="material-icons left">group</i>Listar</a></li>
                  <li><a href="{{ url('admin/asistencia') }}"><i class="material-icons left">group</i>Asistencia</a></li>
                </ul>
              </div>
            </nav>
          </div>

          <ul id="slide-out" class="side-nav blue-grey darken-4">
            <li><div class="user-view">
              <div class="background">
                <img src="{{ asset('images/fondo.png') }}">
              </div>
              <img class="circle" src="{{ asset('images/usuario.png') }}">
              <span class="white-text name center-align">John Doe</span>
                                          <a href="#" class="dropdown-button white-text" data-activates="dropdown2"><i class="material-icons left">arrow_drop_down</i></a>
              <ul id='dropdown2' class='dropdown-content'>
                <li><a href="route('auth.logout')">Cerrar Sesion</a></li>
              </ul>
              <span class="white-text email center-align">jdandturk@gmail.com </span>
            </div></li>

            <li class="bold"><a href="#!" class="waves-effect waves-teal white-text"><i class="mdl-color-text--blue-grey-400 material-icons white-text" role="presentation">home</i>Inicio</a></li>
            <li class="bold"><a href="#!" class="waves-effect waves-teal white-text"><i class="mdl-color-text--blue-grey-400 material-icons white-text" role="presentation">group_add</i>Registro</a></li>
            <li class="bold"><a href="#!" class="waves-effect waves-teal white-text"><i class="mdl-color-text--blue-grey-400 material-icons white-text" role="presentation">group</i>Listar</a></li>  
          </ul>
          </div>
      </section>

    </header>
      <!--HEADER-->

    <section id="main">
    
      @yield('content')

    </section>
      
    <!--MAIN-->

    <footer class="page-footer blue-grey lighten-4">
      
      <div class="row">
        
        <div class="container">
          
          <img class="responsive-img" src="{{ asset('images/inicio.png') }}">
        
        </div>
    
      </div>

      <div class="footer-copyright blue-grey darken-4">

        <div class="container">
          
          <a class="grey-text text-lighten-4 right" href="#!">Guayanatec</a>
        
        </div>
      
      </div>

    </footer>

        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/scriptIndex.js') }}"></script>
      <script type="text/javascript" src="{{ asset('frameworks/materialize/js/materialize.js') }}"></script>

  </body>
  
</html>