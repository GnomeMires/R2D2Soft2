@extends('trabajomoto.create')
@section('motosField')
<div class="form-group">
    <form method = 'POST' action = '{{url("trabajomoto")}}'>

        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="moto_id">Moto: </label>
            <select name = 'moto_id' class = 'form-control'>
                @foreach($motos as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fechaRecepcion">fechaRecepcion</label>
            <input id="fechaRecepcion" name = "fechaRecepcion" type="date" value="<?php echo date('d/m/Y');?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="fechaEntrega">fechaEntrega</label>
            <input id="fechaEntrega" name = "fechaEntrega" type="date" value="<?php echo date('d/m/Y');?>" class="form-control">
        </div>

        <div class="form-group">
            <input id="costoTotal" name = "costoTotal" type="hidden" class="form-control" value="0.00">
        </div>

        <div class="form-group">
            <input id="estado" name = "estado" type="hidden" class="form-control" value="0">
        </div>

        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input id="descripcion" name = "descripcion" type="text" class="form-control">
        </div>

        <div class="form-group">
            <input name = 'user_id' class = 'form-control' value="{{ Auth::user()->id }}" type="hidden">
        </div>
            <div class="form-group">
                <input name = 'person_id' class = 'form-control' value="{{$id}}" type="hidden">
            </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>

</div>
@endsection