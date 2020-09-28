<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>registro</title>
</head>
<body>
    <form action="POST">
        <h1>Registro</h1>
        <input type="text" name="name" placeholder:"nombre completo">
        <input type="email" name="email" placeholder:"email">
        <input type="submit" name="register">
        <label for=""></label>
    </form>

        <?php
        include("registrar.php");
        ?>

</body>
</html>