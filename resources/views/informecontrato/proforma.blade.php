<div class = 'container' style="width: 100%; ">
    <p><strong>SE&Ntilde;OR:{{ $trabajomoto->moto->persona->nombreCompleto }}</strong></p>
    <p><strong>MOTOCICLETA: {{$trabajomoto->moto->marca}}</strong></p>
    <p><strong>PLACA:{{$trabajomoto->moto->placaControl}}</strong></p>
    <br>
    <table style="width: 100%;align:center" border="1" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td style="width: 100%; text-align: center;" colspan="4">
                <p><strong>MOTO BOXES ALARCON</strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 100%; text-align: center;" colspan="4">
                <p><strong>PROFORMA</strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 14%;padding-left: 5px">
                <p><strong>CANTIDAD</strong></p>
            </td>
            <td style="width: 60%;padding-left: 5px">
                <p><strong>DESCRIPCION</strong></p>
            </td>
            <td style="width: 14%;padding-left: 5px">
                <p><strong>PRECIO U.</strong></p>
            </td>
            <td style="width: 12%;padding-left: 5px">
                <p><strong>TOTAL</strong></p>
            </td>
        </tr>
        <?php $totalRU = 0;?>
        @foreach($repuestosUtilizados as $RepuestosUtilizado)
            <tr>

                <td style="padding-left: 5px">{{$RepuestosUtilizado->cantidad}}</td>

                <td style="padding-left: 5px">{{$RepuestosUtilizado->repuestosmoto->nombreRepuesto}} - {{$RepuestosUtilizado->descripcion}}</td>

                <td style="padding-left: 5px">{{$RepuestosUtilizado->precioUnitario}}</td>

                <td style="padding-left: 5px">{{$RepuestosUtilizado->precioTotal}}</td>
                <?php $totalRU += $RepuestosUtilizado->precioTotal; ?>
            </tr>
        @endforeach


        <tr>
            <td  colspan="3" style="padding-left: 5px">
                <p><strong>TOTAL</strong></p>
            </td>
            <td >
                <p><strong>{{$totalRU}}</strong></p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<br>