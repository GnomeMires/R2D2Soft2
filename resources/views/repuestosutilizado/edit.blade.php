@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Editar Repuesto</h1>
            <form method = 'get' action = '{{url("trabajomoto")}}/{{$repuestosutilizado->trabajomoto_id}}/show'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("repuestosutilizado")}}/{{$repuestosutilizado->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>


                <div class="form-group">
                    <label>Repuestos en Inventario</label>
                    <select name = 'repuestosmoto_id' class = "form-control">
                        @foreach($repuestosmotos as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="fechaUso">fechaUso</label>
                    <input id="fechaUso" name = "fechaUso" type="date" class="form-control" value="{{$repuestosutilizado->fechaUso}}">
                </div>
                
                <div class="form-group">
                    <label for="cantidad">cantidad</label>
                    <input id="cantidad" name = "cantidad" type="text" class="form-control" value="{{$repuestosutilizado->cantidad}}">
                </div>


                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input id="descripcion" name = "descripcion" type="text" class="form-control">
                </div>


                <div class="form-group">
                    <input type="hidden" name = 'trabajomoto_id' class = 'form-control' value="{{$repuestosutilizado->trabajomoto_id}}">
                </div>

                
                <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
            </form>
        </div>
@endsection
