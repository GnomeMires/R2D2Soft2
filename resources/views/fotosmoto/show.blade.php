@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Foto Moto</h1>
            <br>
            <form method = 'get' action = '{{url("fotosmoto")}}'>
                <button class = 'btn btn-primary'>Fotosmoto Index</button>
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
                            <b><i>descripcionEstado : </i></b>
                        </td>
                        <td>{{$fotosmoto->descripcionEstado}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fechaFoto : </i></b>
                        </td>
                        <td>{{$fotosmoto->fechaFoto}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>direccionFoto : </i></b>
                        </td>
                        <td>{{$fotosmoto->direccionFoto}}</td>
                    </tr>
                    <tr>
                        <td>
                            <b><i>Foto : </i></b>
                        </td>
                        <td><a href="{{URL::asset('images/'.$fotosmoto->direccionFoto)}}" data-toggle="lightbox"><img src="{{URL::asset('images/'.$fotosmoto->direccionFoto)}}" class="img-responsive" width="20%" height="20%"></a></td>
                    </tr>

                                                
                        
                        <tr>
                        <td>
                            <b><i>noChasis : </i><b>
                        </td>
                        <td>{{$fotosmoto->moto->noChasis}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>noMotor : </i><b>
                        </td>
                        <td>{{$fotosmoto->moto->noMotor}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>placaControl : </i><b>
                        </td>
                        <td>{{$fotosmoto->moto->placaControl}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>color : </i><b>
                        </td>
                        <td>{{$fotosmoto->moto->color}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>marca : </i><b>
                        </td>
                        <td>{{$fotosmoto->moto->marca}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>detalles : </i><b>
                        </td>
                        <td>{{$fotosmoto->moto->detalles}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
@endsection