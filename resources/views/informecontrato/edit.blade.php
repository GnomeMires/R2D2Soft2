<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Informecontrato</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Informecontrato</h1>
            <form method = 'get' action = '{{url("informecontrato")}}'>
                <button class = 'btn btn-danger'>Informecontrato Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("informecontrato")}}/{{$informecontrato->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="destinatario">destinatario</label>
                    <input id="destinatario" name = "destinatario" type="text" class="form-control" value="{{$informecontrato->destinatario}}">
                </div>
                
                <div class="form-group">
                    <label for="via">via</label>
                    <input id="via" name = "via" type="text" class="form-control" value="{{$informecontrato->via}}">
                </div>
                
                <div class="form-group">
                    <label for="referido">referido</label>
                    <input id="referido" name = "referido" type="text" class="form-control" value="{{$informecontrato->referido}}">
                </div>
                
                <div class="form-group">
                    <label for="fechaInforme">fechaInforme</label>
                    <input id="fechaInforme" name = "fechaInforme" type="text" class="form-control" value="{{$informecontrato->fechaInforme}}">
                </div>
                
                <div class="form-group">
                    <label for="descripcionReparacion">descripcionReparacion</label>
                    <input id="descripcionReparacion" name = "descripcionReparacion" type="text" class="form-control" value="{{$informecontrato->descripcionReparacion}}">
                </div>
                
                <div class="form-group">
                    <label for="sugerencias">sugerencias</label>
                    <input id="sugerencias" name = "sugerencias" type="text" class="form-control" value="{{$informecontrato->sugerencias}}">
                </div>
                
                
                <div class="form-group">
                    <label>trabajomotos Select</label>
                    <select name = 'trabajomoto_id' class = "form-control">
                        @foreach($trabajomotos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
