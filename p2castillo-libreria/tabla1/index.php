<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="estilo.css">
<body>
    <form action="insertar.php" method="post" id="form">
    <div class="form">
            <div class="grupo">
                <input type="text" name="titulo" id="name" required> <span class="barra"></span>
                <label for="">Titulo</label>
            </div>
            <div class="grupo">
                <input type="text" name="genero" id="name" required> <span class="barra"></span>
                <label for="">Genero</label>
            </div>
            <div class="grupo">
                <input type="text" name="referencias" id="name" required> <span class="barra"></span>
                <label for="">Referencias</label>
            </div>
            <div class="grupo">
                <input type="date" name="fecha" id="name" required> <span class="barra"></span>
            </div>
            <div class="grupo">
                <input type="text" name="revista" id="name" required> <span class="barra"></span>
                <label for="">Nombre de la revista</label>
            </div>
            <button type="submit">Enviar datos</button>
    </div>
</body>
</html>