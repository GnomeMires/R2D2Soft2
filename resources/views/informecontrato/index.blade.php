@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Lista de Informes</h1>

            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>Destinatario</th>
                    
                    <th>Via</th>
                    
                    <th>Referido</th>
                    
                    <th>Fecha de Informe</th>

                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($informecontratos as $Informecontrato)
                    <tr>
                        
                        <td>{!!$Informecontrato->destinatario!!}</td>
                        
                        <td>{!!$Informecontrato->via!!}</td>
                        
                        <td>{{$Informecontrato->referido}}</td>
                        
                        <td>{{$Informecontrato->fechaInforme}}</td>
                        

                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/informecontrato/{{$Informecontrato->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/informecontrato/{{$Informecontrato->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/informecontrato/{{$Informecontrato->id}}'><i class = 'material-icons'>info</i></a>
                            <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/informecontrato/{{$Informecontrato->id}}/showProforma'><i class = 'material-icons'>receipt</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
@endsection