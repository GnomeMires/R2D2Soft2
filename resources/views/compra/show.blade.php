@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Mostrar Compra</h1>
            <br>
            <form method = 'get' action = '{{url("compra")}}'>
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
                            <b><i>Cantidad : </i></b>
                        </td>
                        <td>{{$compra->cantidad}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Tipo Compra : </i></b>
                        </td>
                        <td>{{$compra->tipoCompra}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Costo Total : </i></b>
                        </td>
                        <td>{{$compra->costoTotal}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Costo Unitario : </i></b>
                        </td>
                        <td>{{$compra->costoUnitario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Fecha Compra : </i></b>
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
                            <b><i>Nombre Repuesto : </i></b>
                        </td>
                        <td>{{$compra->repuestosmoto->nombreRepuesto}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Codigo Repuesto : </i></b>
                        </td>
                        <td>{{$compra->repuestosmoto->codigoRepuesto}}</td>
                        </tr>

                        
                        <tr>
                        <td>
                            <b><i>Nombre Proovedor : </i></b>
                        </td>
                        <td>{{$compra->proovedor->nombreProovedor}}</td>
                        </tr>
                        
                        
                </tbody>
            </table>
        </div>
@endsection