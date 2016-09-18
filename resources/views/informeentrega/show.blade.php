<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Informeentrega</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Informeentrega</h1>
            <br>
            <form method = 'get' action = '{{url("informeentrega")}}'>
                <button class = 'btn btn-primary'>Informeentrega Index</button>
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
                            <b><i>condicionPago : </i></b>
                        </td>
                        <td>{{$informeentrega->condicionPago}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fechaEntrega : </i></b>
                        </td>
                        <td>{{$informeentrega->fechaEntrega}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fechaFactura : </i></b>
                        </td>
                        <td>{{$informeentrega->fechaFactura}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>noFactura : </i></b>
                        </td>
                        <td>{{$informeentrega->noFactura}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>nombreCompleto : </i><b>
                        </td>
                        <td>{{$informeentrega->persona->nombreCompleto}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>nitCI : </i><b>
                        </td>
                        <td>{{$informeentrega->persona->nitCI}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>direccion : </i><b>
                        </td>
                        <td>{{$informeentrega->persona->direccion}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Telefono : </i><b>
                        </td>
                        <td>{{$informeentrega->persona->Telefono}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Celular : </i><b>
                        </td>
                        <td>{{$informeentrega->persona->Celular}}</td>
                        </tr>
                        
                        
                        
                        <tr>
                        <td>
                            <b><i>fechaRecepcion : </i><b>
                        </td>
                        <td>{{$informeentrega->trabajomoto->fechaRecepcion}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>fechaEntrega : </i><b>
                        </td>
                        <td>{{$informeentrega->trabajomoto->fechaEntrega}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>costoTotal : </i><b>
                        </td>
                        <td>{{$informeentrega->trabajomoto->costoTotal}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>estado : </i><b>
                        </td>
                        <td>{{$informeentrega->trabajomoto->estado}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>descripcion : </i><b>
                        </td>
                        <td>{{$informeentrega->trabajomoto->descripcion}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
