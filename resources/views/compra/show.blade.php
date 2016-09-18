@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Show Compra</h1>
            <br>
            <form method = 'get' action = '{{url("compra")}}'>
                <button class = 'btn btn-primary'>Compra Index</button>
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
                            <b><i>cantidad : </i></b>
                        </td>
                        <td>{{$compra->cantidad}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>tipoCompra : </i></b>
                        </td>
                        <td>{{$compra->tipoCompra}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>costoTotal : </i></b>
                        </td>
                        <td>{{$compra->costoTotal}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>costoUnitario : </i></b>
                        </td>
                        <td>{{$compra->costoUnitario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fechaCompra : </i></b>
                        </td>
                        <td>{{$compra->fechaCompra}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Observaciones : </i></b>
                        </td>
                        <td>{{$compra->Observaciones}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>nombreEmpresa : </i><b>
                        </td>
                        <td>{{$compra->datosempresa->nombreEmpresa}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>nit : </i><b>
                        </td>
                        <td>{{$compra->datosempresa->nit}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>direccion : </i><b>
                        </td>
                        <td>{{$compra->datosempresa->direccion}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>telefono : </i><b>
                        </td>
                        <td>{{$compra->datosempresa->telefono}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>celular : </i><b>
                        </td>
                        <td>{{$compra->datosempresa->celular}}</td>
                        </tr>
                        
                        
                        
                        <tr>
                        <td>
                            <b><i>nombreRepuesto : </i><b>
                        </td>
                        <td>{{$compra->repuestosmoto->nombreRepuesto}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>codigoRepuesto : </i><b>
                        </td>
                        <td>{{$compra->repuestosmoto->codigoRepuesto}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>tipoRepuesto : </i><b>
                        </td>
                        <td>{{$compra->repuestosmoto->tipoRepuesto}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>precioVenta : </i><b>
                        </td>
                        <td>{{$compra->repuestosmoto->precioVenta}}</td>
                        </tr>
                        
                        
                        
                        <tr>
                        <td>
                            <b><i>nombreProovedor : </i><b>
                        </td>
                        <td>{{$compra->proovedor->nombreProovedor}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>direccion : </i><b>
                        </td>
                        <td>{{$compra->proovedor->direccion}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>ubicacion : </i><b>
                        </td>
                        <td>{{$compra->proovedor->ubicacion}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>telefono : </i><b>
                        </td>
                        <td>{{$compra->proovedor->telefono}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>correo : </i><b>
                        </td>
                        <td>{{$compra->proovedor->correo}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
@endsection