@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Nuevo Trabajo</h1>
            <br>
            <form method = 'POST' action = '{{url("moto")}}/showMotos'>

                <div class="form-group">
                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                    <label>Elija un Cliente: </label>
                    <select name = 'persona_id' class = 'form-control'>
                        @foreach($personas as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <button class = 'btn btn-danger' type="submit">Ver Motos</button>
                </div>
            </form>
            <br>
            @yield('motosField')
        </div>
@endsection