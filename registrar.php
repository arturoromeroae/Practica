<?php

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {
            ?>
            <h3 class="ok">Se registro tu informacion</h3>
        <?php
        } else {
            ?>
            <h3 class="bad">Hubo un error</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="bad">Por favor completa los campos</h3>
    <?php
    }
}
    
?>