<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Modifier D'un Utilisateur</title>
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
<?php 
$id = isset($_SESSION["userDatas"]["id"]) ? $_SESSION["userDatas"]["id"]: "";
?>

<form action=<?="/User/$id"?> method="POST" id="form_controller">
<input 
    type="text" 
    name="firstname" 
    class="firstname"
        value="<?php
            echo isset($_SESSION["userDatas"]["firstname"]) ? $_SESSION["userDatas"]["firstname"]: ""; 
        ?>
    ">
<input 
    type="text" 
    name="lastname" 
    class="lastname"
    value="
        <?php
            echo isset($_SESSION["userDatas"]["lastname"]) ? $_SESSION["userDatas"]["lastname"]: ""; 
        ?>
">
<input 
    type="text" 
    name="email" 
    class="email"
    value="
        <?php
            echo isset($_SESSION["userDatas"]["email"]) ? $_SESSION["userDatas"]["email"]: ""; 
        ?>
">
<input 
    type="text" 
    name="pays" 
    class="pays"
    value="
        <?php
            echo isset($_SESSION["userDatas"]["pays"]) ? $_SESSION["userDatas"]["pays"]: ""; 
        ?>
">
<input type="submit" value="MODIFIER">
</body>
</html>