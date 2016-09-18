<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Informecontrato</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Informecontrato</h1>
            <br>
            <form method = 'get' action = '{{url("informecontrato")}}'>
                <button class = 'btn btn-primary'>Informecontrato Index</button>
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
                            <b><i>destinatario : </i></b>
                        </td>
                        <td>{{$informecontrato->destinatario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>via : </i></b>
                        </td>
                        <td>{{$informecontrato->via}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>referido : </i></b>
                        </td>
                        <td>{{$informecontrato->referido}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fechaInforme : </i></b>
                        </td>
                        <td>{{$informecontrato->fechaInforme}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>descripcionReparacion : </i></b>
                        </td>
                        <td>{{$informecontrato->descripcionReparacion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>sugerencias : </i></b>
                        </td>
                        <td>{{$informecontrato->sugerencias}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>fechaRecepcion : </i><b>
                        </td>
                        <td>{{$informecontrato->trabajomoto->fechaRecepcion}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>fechaEntrega : </i><b>
                        </td>
                        <td>{{$informecontrato->trabajomoto->fechaEntrega}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>costoTotal : </i><b>
                        </td>
                        <td>{{$informecontrato->trabajomoto->costoTotal}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>estado : </i><b>
                        </td>
                        <td>{{$informecontrato->trabajomoto->estado}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>descripcion : </i><b>
                        </td>
                        <td>{{$informecontrato->trabajomoto->descripcion}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
