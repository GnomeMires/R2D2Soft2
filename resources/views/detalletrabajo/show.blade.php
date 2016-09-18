@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Show Detalletrabajo</h1>
            <br>
            <form method = 'get' action = '{{url("trabajomoto")}}/{{$detalletrabajo->trabajomoto_id}}/show'>
                <button class = 'btn btn-primary'>Atras</button>
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
                            <b><i>detalleTrabajo : </i></b>
                        </td>
                        <td>{{$detalletrabajo->detalleTrabajo}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>estado : </i></b>
                        </td>
                        <td>{{$detalletrabajo->estado}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>precio : </i></b>
                        </td>
                        <td>{{$detalletrabajo->precio}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>fechaRecepcion : </i><b>
                        </td>
                        <td>{{$detalletrabajo->trabajomoto->fechaRecepcion}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>fechaEntrega : </i><b>
                        </td>
                        <td>{{$detalletrabajo->trabajomoto->fechaEntrega}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>costoTotal : </i><b>
                        </td>
                        <td>{{$detalletrabajo->trabajomoto->costoTotal}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>estado : </i><b>
                        </td>
                        <td>{{$detalletrabajo->trabajomoto->estado}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>descripcion : </i><b>
                        </td>
                        <td>{{$detalletrabajo->trabajomoto->descripcion}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
@endsection