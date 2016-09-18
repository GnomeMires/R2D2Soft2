@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Create Repuestosutilizado</h1>
            <form method = 'get' action = '{{url("trabajomoto")}}/{{$id}}/show'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("repuestosutilizado")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="form-group">
                    <label>repuestosmotos Select</label>
                    <select name = 'repuestosmoto_id' class = 'form-control'>
                        @foreach($repuestosmotos as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="cantidad">cantidad</label>
                    <input id="cantidad" name = "cantidad" type="text" class="form-control">
                </div>


                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input id="descripcion" name = "descripcion" type="text" class="form-control">
                </div>
                
                
                <div class="form-group">

                    <input name = 'trabajomoto_id' class = 'form-control' type="hidden" value="{{$id}}">
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
@endsection