@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Datos Taller</h1>
            <br>
            <form method = 'get' action = '{{url("datosempresa")}}'>
                <button class = 'btn btn-primary'>Lista Taller</button>
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
                            <b><i>Nombre Taller : </i></b>
                        </td>
                        <td>{{$datosempresa->nombreEmpresa}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>NIT/CI : </i></b>
                        </td>
                        <td>{{$datosempresa->nit}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Direccion : </i></b>
                        </td>
                        <td>{{$datosempresa->direccion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Telefono : </i></b>
                        </td>
                        <td>{{$datosempresa->telefono}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Celular : </i></b>
                        </td>
                        <td>{{$datosempresa->celular}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
@endsection
