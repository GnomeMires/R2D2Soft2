@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Show Proovedor</h1>
            <br>
            <form method = 'get' action = '{{url("proovedor")}}'>
                <button class = 'btn btn-primary'>Proovedor Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>nombreProovedor : </i></b>
                        </td>
                        <td>{{$proovedor->nombreProovedor}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>direccion : </i></b>
                        </td>
                        <td>{{$proovedor->direccion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>ubicacion : </i></b>
                        </td>
                        <td>{{$proovedor->ubicacion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>telefono : </i></b>
                        </td>
                        <td>{{$proovedor->telefono}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>correo : </i></b>
                        </td>
                        <td>{{$proovedor->correo}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
@endsection