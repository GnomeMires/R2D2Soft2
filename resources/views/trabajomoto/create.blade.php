@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>PASO 1 - DATOS DEL CLIENTE</h1>
            <br>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method = 'POST' action = '{{url("moto")}}/showMotos'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
            <input type="hidden" id="origenPersona" name="origenPersona" value="B">
            <ul class="nav nav-pills">
                <li class="active" ><a data-toggle="pill" href="#buscar" onclick="document.getElementById('origenPersona').value ='B'">Buscar Cliente</a></li>
                <li><a data-toggle="pill" href="#nuevo" onclick="document.getElementById('origenPersona').value ='N'">Nuevo Cliente</a></li>
            </ul>
            <br><br>
            <div class="tab-content">
                <div id="buscar" class="tab-pane fade in active">

                        <div class="form-group">
                            <label>Elija un Cliente: </label>
                            <select name = 'persona_id' class = 'form-control'>
                                @foreach($personas as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>

                </div>
                <div id="nuevo" class="tab-pane fade">

                            <div class="form-group">
                                <label for="nombreCompleto">Nombre Completo *</label>
                                <input id="nombreCompleto" name = "nombreCompleto" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="nitCI">NIT/CI *</label>
                                <input id="nitCI" name = "nitCI" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="direccion">Direccion</label>
                                <input id="direccion" name = "direccion" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Telefono">Telefono</label>
                                <input id="Telefono" name = "Telefono" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Celular">Celular</label>
                                <input id="Celular" name = "Celular" type="text" class="form-control">
                            </div>



                </div>

            </div>
            <br>
                <button class = 'btn btn-primary' type ='submit'>Continuar</button>
        </form>
        </div>
@endsection