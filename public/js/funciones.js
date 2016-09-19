function imprSelect(nombre)
{

    var ficha = document.getElementById(nombre);
    var ventimp = window.open(' ', 'popimpr');
    ventimp.document.write('<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">' );
    ventimp.document.write('<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">');
    ventimp.document.write('<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">');
    ventimp.document.write('<link rel="stylesheet" href="../css/ekko-lightbox.min.css">');
    ventimp.document.write('<link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">');
    ventimp.document.write('<link rel="stylesheet" href="../css/select2.min.css">');
    ventimp.document.write('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">');
    ventimp.document.write( '</head><body onload="window.print()">');
    ventimp.document.write( ficha.innerHTML );
    ventimp.document.write( '</body>' );
    ventimp.print();
    ventimp.close();
}
