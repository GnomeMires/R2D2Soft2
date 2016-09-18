@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Persona</h1>
            <br>
            <form method = 'get' action = '{{url("persona")}}'>
                <button class = 'btn btn-primary'>Lista Personas</button>
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
                            <b><i>Nombre Completo : </i></b>
                        </td>
                        <td>{{$persona->nombreCompleto}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>NIT/CI : </i></b>
                        </td>
                        <td>{{$persona->nitCI}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Direccion : </i></b>
                        </td>
                        <td>{{$persona->direccion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Telefono : </i></b>
                        </td>
                        <td>{{$persona->Telefono}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Celular : </i></b>
                        </td>
                        <td>{{$persona->Celular}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
@endsection
