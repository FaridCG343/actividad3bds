<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla edicion</title>
</head>
<body>
    <?php 
    $titulo=$_POST["id_titulo"];
    echo $titulo;
    echo '<link rel="stylesheet" href="estilo.css">';
    include("conexion.php");
    if (isset($_POST['ISBN']) && !empty($_POST['ISBN']) &&
    isset($_POST['año']) && !empty($_POST['año']) &&
    isset($_POST['idioma']) && !empty($_POST['idioma'])) {
        $con=mysqli_connect("localhost","root","","libreria");
        mysqli_query($con,("INSERT INTO `libreria`.`edicion` 
        (`ISBN`, `año`, `idioma`, `id_titulo`) VALUES 
        ('$_POST[ISBN]','$_POST[año]','$_POST[idioma]','$_POST[id_titulo]')"));
        ?>
        <form action="" id=form>
        <h1>Datos guardados corectamente</h1>
        <?php print_r($_POST)?>
    </form>
    <?php }else {?>
        <form action="" id=form>
    <h1>Ocurrio un error revisa los datos e intentalo de nuevo</h1>
    </form>>
<?php }?>
</body>
</html>