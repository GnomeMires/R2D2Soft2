<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>R2D2SOFT</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Lightbox-->
    <link rel="stylesheet" href="{{ URL::asset('css/ekko-lightbox.min.css')  }}">
    <!--Datatable Search, pagination-->
    <link rel="stylesheet" href="{{ URL::asset('css/dataTables.bootstrap.min.css')  }}">
    <!--Select2 autocomplete select-->
    <link  rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">R2D2Soft</a>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
               <!-- <li class="active"><a href="{{ url('/') }}">
                        Laravel
                    </a></li>-->
                <li><a href="{{ url('/home') }}">Home</a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/moto') }}">Cuenta</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Desconectar</a></li>
                    </ul>
                    </li>
                    <li><a href="{{ url('/persona') }}"><i class="fa fa-btn fa-users"></i>Personas</a></li>
                    <li><a href="{{ url('/datosempresa') }}"><i class="fa fa-btn fa-briefcase"></i>Taller</a></li>
                       <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-btn fa-motorcycle"></span>Motos
                               <span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                   <li><a href="{{ url('/moto') }}">Motos</a></li>
                                   <li><a href="{{ url('/fotosmoto') }}">Fotos Motos</a></li>
                                   <li><a href="{{url("trabajomoto")}}/create">Nuevo Trabajo</a></li>
                                   <li><a href="{{ url('/trabajomoto') }}">Trabajos</a></li>
                                   <li><a href="{{ url('/informecontrato') }}">Informe</a></li>
                               </ul>
                       </li>
                       <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-btn fa-wrench"></span>Repuestos
                               <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                               <li><a href="{{ url('/repuestosmoto') }}">Inventario</a></li>
                               <li><a href="{{ url('/repuestosutilizado') }}">Repuestos Utilizados</a></li>
                               <li><a href="{{ url('/proovedor') }}">Proovedores</a></li>
                               <li><a href="{{ url('/compra') }}">Compras de Respuestos</a></li>
                           </ul>
                       </li>
                       <li><a href="{{ url('/reportes') }}"><i class="fa fa-btn fa-files-o"></i>Reportes</a></li>
                    <!--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Desconectar</a></li>-->
                @endif
            </ul>
        </div>
            </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   <!--datatables javascript-->
    <script src="{{ URL::asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('js/dataTables.bootstrap.min.js')}}"></script>
    <!--select2 javascript-->
    <script src="{{ URL::asset('js/select2.min.js') }}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <!--Lightbox Javascript-->
    <script src = "{{ URL::asset('js/ekko-lightbox.min.js')}}"></script>

</body>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/funciones.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
<script>$('select').select2();</script>
<script>
    $(document).ready(function() {
        $('#pagination').DataTable();
    } );
</script>
<script>
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>

</html>
