@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Datos de la Moto</h1>
            <br>
            <form method = 'get' action = '{{url("moto")}}'>
                <button class = 'btn btn-primary'>Lista de Motos</button>
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
                            <b><i>No. Chasis : </i></b>
                        </td>
                        <td>{{$moto->noChasis}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>No. Motor : </i></b>
                        </td>
                        <td>{{$moto->noMotor}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Placa de Control : </i></b>
                        </td>
                        <td>{{$moto->placaControl}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Color : </i></b>
                        </td>
                        <td>{{$moto->color}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Marca : </i></b>
                        </td>
                        <td>{{$moto->marca}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Detalles : </i></b>
                        </td>
                        <td>{{$moto->detalles}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>Nombre Completo : </i><b>
                        </td>
                        <td>{{$moto->persona->nombreCompleto}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>NIT/CI : </i><b>
                        </td>
                        <td>{{$moto->persona->nitCI}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Direccion : </i><b>
                        </td>
                        <td>{{$moto->persona->direccion}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Telefono : </i><b>
                        </td>
                        <td>{{$moto->persona->Telefono}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Celular : </i><b>
                        </td>
                        <td>{{$moto->persona->Celular}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
@endsection
