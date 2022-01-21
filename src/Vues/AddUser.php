<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            if (array_key_exists("error", $_SESSION)) {
                echo $_SESSION["error"];
                unset($_SESSION["error"]);
            }
        ?>
        
    </div>
    <form action="/User" method="POST">
        <input type="text" name="fistname" class="firstname" placeholder="Prenom">
        <input type="text" name="lastname" class="lastname" placeholder="Nom">
        <input type="text" name="email" class="email" placeholder="Email">
        <input type="text" name="pays" class="pays" placeholder="Pays">
        <input type="submit" value="Valider">
    </form>
</body>
</html>