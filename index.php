<!-- REQUISITOS DE LA APLICACIÓN ->
(10 Minutos . 13:10)

R1 = El usuario se identifica (nombre y password)
R2 = Todo usuario puede subir un fichero (uploads)
   R2.1 = Los ficheros subidos se ubicarán en carpetas según el tipo  (auido, imagen, otros)
R3 = El usuario admin puede publicar ficheros (download)
  R3.1 = si usuario admin listado de ficheros con checkbox 
  R3.2 ficheros chek serán publicados (movidos a la carpeta download)


R5 = 20 M tamaño máximo de los ficheros
R6 = Todo usuario podrá acceder a los ficheros publicados (donwload)



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>DESCARGA DE FICHEROS</h1>
        </hr>
    <fieldset>
        <legend>Datos de usuario</legend>
        <form action="descarga.php" method="POST" enctype="multipart/form-data">
            Usuario  <input type="text" name="usuario" id="">
            Password  <input type="password" name="password" id=""><br />
            
           <!-- <input type="hidden" name="MAX_FILE_SIZE" value="10M"> -->
            <h3>Selecciona fichero </h3>
            <input type="file" name="fichero" id="" >
            <br /><br />
            <input type="submit" value="Acceder" name="descarga">
        </form>
    </fieldset>
            
    </body>
</html>