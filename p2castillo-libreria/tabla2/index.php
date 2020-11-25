<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla edicion</title>
</head>
<body>
<link rel="stylesheet" href="estilos.css">
<?php 
    function obtenerdatos(){
        $con=mysqli_connect("localhost","root","","libreria");
        $consulta="SELECT titulo FROM libro";
        $resultado=$con->query($consulta);
        $fila= array();
        while ($row=mysqli_fetch_object($resultado)) {
            $fila[]=$row->titulo;
        }
        return $fila;
    }
    function llenarselect($titulo){
        foreach ($titulo as $ti) {
            $html.="<option value=".$ti.">".$ti."</option>";
        }
        return $html;
    }
?>
    <form action="insertar.php" method="post" id="form">
    <div class="form">
            <div class="grupo">
                <input type="number" name="ISBN" max="9999" min="1" id="name" required> <span class="barra"></span>
                <label for="">ISBN</label>
            </div>
            <div class="grupo">
                <input type="number" min="1" max="2020" name="año" id="name" required> <span class="barra"></span>
                <label for="">Año</label>
            </div>
            <div class="grupo">
                <input type="text" name="idioma" id="name" required> <span class="barra"></span>
                <label for="">Idioma</label>
            </div>
            <div class="grupo">
                <select name="id_titulo" class="select-css">
                <?php 
                mysqli_connect("localhost","root","","libreria");
                $hola=obtenerdatos();
                foreach ($hola as $h){ ?>
                    <option value=<?php ?>><?php echo$h;?></option>  
               <?php } ?>
                </select>
            </div>
            <button type="submit">Enviar datos</button>
</body>
</html>