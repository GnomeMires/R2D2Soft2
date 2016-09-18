@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Show Trabajomoto</h1>
            <br>
            <form method = 'get' action = '{{url("trabajomoto")}}'>
                <button class = 'btn btn-primary'>Trabajomoto Index</button>
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
                            <b><i>fechaRecepcion : </i></b>
                        </td>
                        <td>{{$trabajomoto->fechaRecepcion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fechaEntrega : </i></b>
                        </td>
                        <td>{{$trabajomoto->fechaEntrega}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>costoTotal : </i></b>
                        </td>
                        <td>{{$trabajomoto->costoTotal}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>estado : </i></b>
                        </td>
                        <td>{{$trabajomoto->estado}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>descripcion : </i></b>
                        </td>
                        <td>{{$trabajomoto->descripcion}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>noChasis : </i><b>
                        </td>
                        <td>{{$trabajomoto->moto->noChasis}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>noMotor : </i><b>
                        </td>
                        <td>{{$trabajomoto->moto->noMotor}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>placaControl : </i><b>
                        </td>
                        <td>{{$trabajomoto->moto->placaControl}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>color : </i><b>
                        </td>
                        <td>{{$trabajomoto->moto->color}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>marca : </i><b>
                        </td>
                        <td>{{$trabajomoto->moto->marca}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>detalles : </i><b>
                        </td>
                        <td>{{$trabajomoto->moto->detalles}}</td>
                        </tr>
                        
                        
                        
                        <tr>
                        <td>
                            <b><i>name : </i><b>
                        </td>
                        <td>{{$trabajomoto->user->name}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>email : </i><b>
                        </td>
                        <td>{{$trabajomoto->user->email}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>password : </i><b>
                        </td>
                        <td>{{$trabajomoto->user->password}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>remember_token : </i><b>
                        </td>
                        <td>{{$trabajomoto->user->remember_token}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>created_at : </i><b>
                        </td>
                        <td>{{$trabajomoto->user->created_at}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>updated_at : </i><b>
                        </td>
                        <td>{{$trabajomoto->user->updated_at}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
@endsection