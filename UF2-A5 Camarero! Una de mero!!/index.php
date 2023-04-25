<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="utensils-solid.svg" type="image/x-icon">
    <title>Don Manolo</title>
</head>
<body class="cuerpo">
    <div class="navbar">
        <a href="#bebi" class="en">Bebidas</a>
        <a href="#tapa" class="en">Tapas</a>
        <a href="#ensa" class="en">Ensaladas</a>
        <a href="#carn" class="en">Carnes</a>
        <a href="#pesc" class="en">Pescados</a>
        <a href="#pos" class="en">Postres</a>
    </div>
    <div class="Supremo">
    <br>
    <br>
    <h1 class="titu">La carta de Don Manolo</h1>
        <?php
        $xml = simplexml_load_file("info.xml") or die;
        //
        echo "<h2 class='titulo' id='bebi'>Bebidas</h2>";
        echo "<ul class='lista'>";
        foreach($xml->bebidas as $bebida) {
            echo "<li><strong class='comida'>" . $bebida->titulo . "</strong> " . $bebida->descripcion . "🍹 <strong class='precio'>" . $bebida->precio . "</strong></li>";
        }
        echo "</ul>";
        //
        echo "<h2 class='titulo' id='tapa'>Tapas</h2>";
        echo "<ul class='lista'>";
        foreach($xml->tapas as $tapa) {
            echo "<li><strong class='comida'>" . $tapa->titulo . "</strong> " . $tapa->descripcion . "🍲 <strong class='precio'>" . $tapa->precio . "</strong></li>";
        }
        echo "</ul>";
        //
        echo "<h2 class='titulo' id='ensa'>Ensalada</h2>";
        echo "<ul class='lista'>";
        foreach($xml->Ensaladas as $ensalada) {
            echo "<li><strong class='comida'>" . $ensalada->titulo . "</strong> " . $ensalada->descripcion . "🥗 <strong class='precio'>" . $ensalada->precio . "</strong></li>";
        }
        echo "</ul>";
        //
        echo "<h2 class='titulo' id='carn'>Carnes</h2>";
        echo "<ul class='lista'>";
        foreach($xml->Carnes as $carne) {
            echo "<li><strong class='comida'>" . $carne->titulo . "</strong> " . $carne->descripcion . "🥩 <strong class='precio'>" . $carne->precio . "</strong></li>";
        }
        echo "</ul>";
        //
        echo "<h2 class='titulo' id='pesc'>Pescados</h2>";
        echo "<ul class='lista'>";
        foreach($xml->Pescados as $pescado) {
            echo "<li><strong class='comida'>" . $pescado->titulo . "</strong> " . $pescado->descripcion . "🐟 <strong class='precio'>" . $pescado->precio . "</strong></li>";
        }
        echo "</ul>";
        //
        echo "<h2 class='titulo' id='pos'>Postres</h2>";
        echo "<ul class='lista'>";
        foreach($xml->Postres as $postre) {
            echo "<li><strong class='comida'>" . $postre->titulo . "</strong> " . $postre->descripcion . "🍮 <strong class='precio'>" . $postre->precio . "</strong></li>";
        }
        echo "</ul>";
        ?>
    </div>
</body>
</html>