@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Show Proovedor</h1>
            <br>
            <form method = 'get' action = '{{url("proovedor")}}'>
                <button class = 'btn btn-primary'>Atras</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Campo</th>
                    <th>Valor</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>Nombre Proovedor : </i></b>
                        </td>
                        <td>{{$proovedor->nombreProovedor}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Direccion : </i></b>
                        </td>
                        <td>{{$proovedor->direccion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Ubicacion : </i></b>
                        </td>
                        <td>{{$proovedor->ubicacion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Telefono : </i></b>
                        </td>
                        <td>{{$proovedor->telefono}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Correo : </i></b>
                        </td>
                        <td>{{$proovedor->correo}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
@endsection