<?php

// session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Utilisateur</title>
</head>
<body>
   


<form action=<?="/MUser/$id"?> method="POST">
<input 
    type="text" 
    name="firstname" 
    class="firstname"
        value="<?php 
        echo $userId->getFirstname();
        // echo isset($_SESSION["userDatas"]["firstname"]) ? $_SESSION['userDatas']['firstname'] : "";?>">
<input 
    type="text" 
    name="lastname" 
    class="lastname"
    value="<?php 
    echo $userId->getLastname();
    //echo isset($_SESSION["userDatas"]["lastname"]) ? $_SESSION['userDatas']['lastname'] : "";?>">
<input 
    type="text" 
    name="email" 
    class="email"
    value="<?php 
    echo $userId->getEmail();
    // echo isset($_SESSION["userDatas"]["email"]) ? $_SESSION['userDatas']['email'] : "";?>">
<input 
    type="text" 
    name="pays" 
    class="pays"
    value="<?php 
    echo $userId->getPays();
    //echo isset($_SESSION["userDatas"]["pays"]) ? $_SESSION['userDatas']['pays'] : ""; ?>">
<input type="submit" value="MODIFIER">
</body>
</html>