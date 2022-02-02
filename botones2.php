<?php
switch ($_POST['cmdForm']) {
    case "Procesar 1":
        echo '<script language="javascript">';
        echo 'alert("Usted selecciono el CASE 1")';  //not showing an alert box.
        echo '</script>';
        echo "<a href='switchBotones.html' /> <h4>Devolver</h4>";
        break;
        
    case "Procesar 2":
        echo '<script language="javascript">';
        echo 'alert("Usted selecciono el CASE 2")';  //not showing an alert box.
        echo '</script>';
        echo "<a href='switchBotones.html' /> <h4>Devolver</h4>";
        break;
    case "Procesar 3":
        echo '<script language="javascript">';
        echo 'alert("Usted selecciono el CASE 3")';  //not showing an alert box.
        echo '</script>';
        echo "<a href='switchBotones.html' /> <h4>Devolver</h4>";
        break;
     case "Procesar 4":
        echo '<script language="javascript">';
        echo 'alert("Usted selecciono el CASE 4")';  //not showing an alert box.
        echo '</script>';
        echo "<a href='switchBotones.html' /> <h4>Devolver</h4>";
        break;
}