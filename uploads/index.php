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
        <form action ="descarga.php" method="POST" enctype="multipart/form-data" >
            
            Usuario <input type="text" name="usuario">
            Password <input type="text" name="pass">
            <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
        <!--    <input type="hidden" name="MAX_FILE_SIZE" value=1024 />-->
            <input type="file" name="fichero[]" id=""><br>
            <br>
            <input type="submit" value="Procesar">
        </form>
              
    </body>
</html>