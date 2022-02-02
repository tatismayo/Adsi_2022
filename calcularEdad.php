<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <!--Formulario llamar el metodo del repositorio ADSI_2022 - Ejercicio Switch case-->
    <form action="calcularEdad.php" method="post">
        <!--Cada pagina tiene un form action-->
        <p>Digite el año presente</p>
        <input type="text" name="apresente" placeholder="Escriba año presente">
        <br>
        <p>Escriba el año en que nació</p>
        <input type="text" name="anacimiento" placeholder="Escriba año en que nació">
        <br>
        <input type="submit" value="calcular">

        <!---
    
        -->
        <?php
        $apresente = $_REQUEST['apresente'];
        $anacimiento = $_REQUEST['anacimiento'];

        $Edad = $apresente - $anacimiento;

        echo "Su edad es $Edad años";

        ?>

    </form>

</body>
</html>