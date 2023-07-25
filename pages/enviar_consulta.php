<?php

    $nombre_form = $_POST["nombre"];
    $apellido_form = $_POST["apellido"];
    $correo_form = $_POST["correo"];
    $mensaje_form = $_POST["mensaje"];

    $cuerpo_mail = "Nombre:" .$nombre_form."\r\n". "Apellido:" .$apellido_form."\r\n". "Correo:" .$correo_form."\r\n". "Mensaje" .$mensaje_form."\r\n".

mail("simonleissa@gmail.com", "Mensaje enviado desde nuestro sitio" ,$cuerpo_mail);

$conexion = mysqli_connect("localhost", "root", "", "programador_utn") or
exit("No se pudo conectar a la base de datos");

$conexion = mysqli_connect("localhost", "id20795920_keyler17_", "Simonleissa.", "id20795920_programador_utn") or
exit("No se pudo conectar a la base de datos");

//Consulta

$query = "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$correo_form', '$mensaje_formmensa')";

$result = mysqli_query($conexion, $query);

mysqli_close($conexion);

header("Location: contacto.php?ok");