<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Modifier D'un Utilisateurs</title>
</head>
<body>
    
<form action="/User" method="POST">
<input type="text" name="firstname" class="firstname">
<input type="text" name="lastname" class="lastname">
<input type="text" name="email" class="email">
<input type="text" name="pays" class="pays">
<input type="submit" value="MODIFIER">
</body>
</html>