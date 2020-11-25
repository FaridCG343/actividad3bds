<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo '<link rel="stylesheet" href="estilo.css">';
include("conexion.php");
if(isset($_POST['titulo']) && !empty($_POST['titulo']) &&
isset($_POST['genero']) && !empty($_POST['genero']) &&
isset($_POST['referencias']) && !empty($_POST['referencias']) &&
isset($_POST['fecha']) && !empty($_POST['fecha']) &&
isset($_POST['revista']) && !empty($_POST['revista'])
){
    $con=mysqli_connect($servidor,$usuario,$contraseña,$db);
    mysqli_query($con,("INSERT INTO libro VALUES ('$_POST[titulo]',
    '$_POST[genero]','$_POST[referencias]','$_POST[fecha]',
    '$_POST[revista]')"));?>
    <form action="" id=form>
        <h1>Datos guardados corectamente</h1>
    </form>
<?php }else {?>
    <form action="" id=form>
    <h1>Ocurrio un error revisa los datos e intentalo de nuevo</h1>
    </form>
<?php }?>
</body>
</html>

