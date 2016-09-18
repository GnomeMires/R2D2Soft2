@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Mostrar Repuesto/Producto</h1>
            <br>
            <form method = 'get' action = '{{url("repuestosmoto")}}'>
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
                            <b><i>nombreRepuesto : </i></b>
                        </td>
                        <td>{{$repuestosmoto->nombreRepuesto}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>codigoRepuesto : </i></b>
                        </td>
                        <td>{{$repuestosmoto->codigoRepuesto}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cantidad : </i></b>
                        </td>
                        <td>{{$repuestosmoto->cantidad}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>unidadMedida : </i></b>
                        </td>
                        <td>{{$repuestosmoto->unidadMedida}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>tipoRepuesto : </i></b>
                        </td>
                        <td>{{$repuestosmoto->tipoRepuesto}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>precioVenta : </i></b>
                        </td>
                        <td>{{$repuestosmoto->precioVenta}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>nombreEmpresa : </i><b>
                        </td>
                        <td>{{$repuestosmoto->datosempresa->nombreEmpresa}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>nit : </i><b>
                        </td>
                        <td>{{$repuestosmoto->datosempresa->nit}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>direccion : </i><b>
                        </td>
                        <td>{{$repuestosmoto->datosempresa->direccion}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>telefono : </i><b>
                        </td>
                        <td>{{$repuestosmoto->datosempresa->telefono}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>celular : </i><b>
                        </td>
                        <td>{{$repuestosmoto->datosempresa->celular}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
@endsection