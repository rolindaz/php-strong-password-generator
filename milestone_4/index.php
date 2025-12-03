<?php

session_start();
require_once("./functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center my-3">
        Password Generator
    </h1>
    <div class="container">
        <form action="" class="align-items-center d-flex flex-column gap-3">
            <div>
                <label for="password_length">
                    Write your password's desired length (min: 5 - max: 25 characters):
                </label>
                <input type="number" name="password_length" id="password_length" min=5 max=25>
            </div>
            <button class="btn btn-primary mx-auto" style="max-width: fit-content" type="submit">
                <a class="text-decoration-none text-white" href="./result.php">
                    Generate Password
                </a>
            </button>
        </form>
        <div class="my-4 text-center">
            La tua nuova password:
            <?php
            $password_desired_length = 0;
            $generated_password = "";
        
        if (isset($_GET['password_length'])) {
            $password_desired_length = (int)$_GET['password_length'];
            $generated_password .= generate_password($password_desired_length);
            $_SESSION['generated_password'] = $generated_password;
            echo "<strong>" . $generated_password . "</strong>";
        }
            ?>
        </div>
    </div>
</body>
</html>