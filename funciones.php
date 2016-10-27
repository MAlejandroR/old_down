<?php

function muestra_ficheros() {
    echo ' 
    <h2>Ficheros públicos </h2>
     <fieldset> <legend>Publicarción de ficheros</legend>
      <form action="." method="POST">';

    $fMusica = scandir("/var/www/descargas/downloads/musica/");
    $fImagenes = scandir("/var/www/descargas/downloads/imagenes/");
    $fOtros = scandir("/var/www/descargas/downloads/otros/");
    echo "<fieldset><legend>Canciones subidas </legend>";
    foreach ($fMusica as $cancion) {
        if (($cancion !== '.') && ($cancion !== '..'))
            echo "<a href=./downloads/musica/$cancion />$cancion</a><br />";
    }
    echo "</fieldset><fieldset><legend>Imagenes subidas </legend>";
    foreach ($fImagenes as $imagen) {
        if (($imagen !== '.') && ($imagen !== '..'))
            echo "<a href=./downloads/imagenes/$imagen />$imagen</a><br />";
    } echo "</fieldset><fieldset><legend>Otros ficheros subidas </legend>";
    foreach ($fOtros as $otro) {
        if (($otro !== '.') && ($otro !== '..'))
            echo "<a href=./downloads/otros/$otro />$otro</a><br />";
    }
    echo "</fieldset></form></fieldset>";
}

function administra_ficheros() {
    echo '<hr /><h2>Adminstracion de ficheros</h2><hr />';
    echo '<fieldset>
    <legend>Publicarción de ficheros</legend>
       <form action="descarga.php" method="POST">';

    $fMusica = scandir("/var/www/descargas/uploads/musica/");
    $fImagenes = scandir("/var/www/descargas/uploads/imagenes/");
    $fOtros = scandir("/var/www/descargas/uploads/otros/");
    echo "<fieldset><legend>Canciones subidas </legend>";
    foreach ($fMusica as $cancion) {
        if (($cancion !== '.') && ($cancion !== '..'))
            echo "<input type=checkbox name = musica[] value =$cancion />$cancion<br />";
    }
    echo "</fieldset><fieldset><legend>Imagenes subidas </legend>";
    foreach ($fImagenes as $imagen) {
        if (($imagen !== '.') && ($imagen !== '..'))
            echo "<input type=checkbox name = imagenes[] value =$imagen />$imagen<br />";
    }
    echo "</fieldset><fieldset><legend>Otros ficheros subidas </legend>";
    foreach ($fOtros as $otro) {
        if (($otro !== '.') && ($otro !== '..'))
                echo "<input type=checkbox name = otros[] value =$otro />$otro<br />";
    }
    echo "</fieldset>";
    echo "<input type=hidden name=usuario value='admin' />";
    echo "<input type=hidden name=password value='admin' />";
    
    echo '<input type="submit" value="publicar" name="publicar"></form> </fieldset>';
}

function publica() {
    echo "<h2>Sección de administración</h2>";
//Leemos los ficheros a mover
    $fMusica = $_POST['musica'];
    $fImagenes = $_POST['imagenes'];
    $fOtros = $_POST['otros'];
//Movemos los ficheros de musica
    $origen = "/var/www/descargas/uploads";
    $destino = "/var/www/descargas/downloads";

    foreach ($fMusica as $cancion) {
        rename($origen . '/musica/' . $cancion, $destino . '/musica/' . $cancion);
    }

    foreach ($fImagenes as $imagen) {
        rename($origen . '/imagenes/' . $imagen, $destino . '/imagenes/' . $imagen);
    }

    foreach ($fOtros as $otro) {
        rename($origen . '/otros/' . $otro, $destino . '/otros/' . $otro);
    }
}
