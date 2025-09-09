<?php //Todo lo que vaya aca es lógica PHP

$primerDato = 1;
$segundaDAto = 2;
$sumaDeDatos = $primerDato + $segundaDAto;

if($sumaDeDatos >18){
    $resultado = "La suma es mayor a 18";
}  else{
    
}

$pageTitle = "Programación Web II";   //variable
$Imagen="https://upload.wikimedia.org/wikipedia/commons/a/ad/Boca-Juniors.jpg"

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
<?php echo $pageTitle; ?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>







<?php
    echo $pageTitle;
?>
<?= $pageTitle;?>

    <h1>
    <div>
    <div class="card" style="width: 18rem;">
    <img src="<?php echo $Imagen ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
</h1>





</body>
</html>