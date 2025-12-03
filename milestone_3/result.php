<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La tua nuova password</title>
</head>
<body>
    <h1>
        La tua nuova password:
        <?php
        echo $_SESSION['generated_password'];    
        ?>
    </h1>
</body>
</html>