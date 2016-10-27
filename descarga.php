<?php
require_once 'funciones.php';

//Si le he dado a publicar
if (isset($_POST['publicar']) ){
    publica();
}
muestra_ficheros();
//R1 Leo usuario y password

$user = filter_input(INPUT_POST, 'usuario');
$pass = filter_input(INPUT_POST, 'password');
$adm = false;
if ($user == 'admin' && $pass == 'admin')
    $adm = true;




//Requisito R2 y R2.1
$origen = $_FILES['fichero']['tmp_name'];
$nombreFichero = $_FILES['fichero']['name'];
$tipo = $_FILES['fichero']['type'];
$tipo_fichero = explode('/', $tipo);
switch ($tipo_fichero[0]) {
    case 'audio':
        $dir_destino = "/var/www/descargas/uploads/musica";
        break;
    case 'image':
        $dir_destino = "/var/www/descargas/uploads/imagenes";
        break;
    default:
        $dir_destino = "/var/www/descargas/uploads/otros";
}

$destino = $dir_destino . '/' . basename($nombreFichero);


if (move_uploaded_file($origen, $destino))
    echo "Fichero subido de forma correcta";
else
    echo "Error!!!! no se ha podido subir el fichero ";
?>



<?php
if ($adm) {
    administra_ficheros();
}
    ?>
    

