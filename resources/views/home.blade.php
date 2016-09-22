@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Trabajos Pendientes</div>

                <div class="panel-body">
                    <div align="center"><img src="{{URL::asset('logo_moto.bmp')}}" width="20%" height="20%"></div>

                    <table class = "table table-striped table-bordered">
                        <thead>

                        <th>No.</th>

                        <th>Descripcion</th>

                        <th>Fecha Entrega</th>

                        <th>Estado</th>


                        <th>Placa</th>

                        <th>Marca</th>

                        </thead>
                        <tbody>
                        <?php $count = 1;?>
                        @foreach($trabajomotos as $trabajos)
                            <tr>
                                <td>{{$count}}</td>

                                <td>{{$trabajos->descripcion}}</td>

                                <td>{{$trabajos->fechaEntrega}}</td>

                                <td>NO ENTREGADO</td>

                                <td>{{$trabajos->placaControl}}</td>

                                <td>{{$trabajos->marca}}</td>

                            </tr>
                            <?php $count++;?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
