<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="boostrap4/css/bootstrap.min.css">
</head>

<body>
    <div id="paises">
        <label> <select name="">

                <?php 
                include 'conexion.php';
                $consulta="SELECT * FROM paises";
                $ejecutar=mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                
                
                ?>
                <?php foreach ($ejecutar as $opciones): ?>
                    <option value="<?php echo $opciones['paises']?>"><?php echo $opciones['paises']?></option>

                <?php endforeach ?>

            </select></label>
    </div>

</body>

</html>