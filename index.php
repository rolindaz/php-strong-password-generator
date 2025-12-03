<!--  Milestone 1
Creare un form che invii in GET la lunghezza desiderata della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere minuscole, maiuscole, numeri e/o simboli) della lunghezza specificata, da restituire all’utente.
Scriviamo tutta la logica ed il layout in un unico file index.php -->

<?php


function generate_password($length) : string {
    $lowercase_chars = [
        "a",
        "b",
        "c",
        "d",
        "e",
        "f",
        "g",
        "h",
        "i",
        "j",
        "k",
        "l",
        "m",
        "n",
        "o",
        "p",
        "q",
        "r",
        "s",
        "t",
        "u",
        "v",
        "w",
        "x",
        "y",
        "z"
    ];
    
    $uppercase_chars = [
        "A",
        "B",
        "C",
        "D",
        "E",
        "F",
        "G",
        "H",
        "I",
        "J",
        "K",
        "L",
        "M",
        "N",
        "O",
        "P",
        "Q",
        "R",
        "S",
        "T",
        "U",
        "V",
        "W",
        "X",
        "Y",
        "Z"
    ];
    
    $symbols = [
        "!",
        '"',
        "#",
        "$",
        "%",
        "&",
        "'",
        "(",
        ")",
        "*",
        "+",
        ",",
        "-",
        ".",
        "/",
        ":",
        ";",
        "<",
        "=",
        ">",
        "?",
        "@",
        "[",
        "\"",
        "]",
        "^",
        "_",
        "`",
        "{",
        "|",
        "}",
        "~"
    ];
    
    $numbers = [
        0,
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9
    ];
    $characters = join("", $lowercase_chars) . join("", $uppercase_chars) . join("", $symbols) . join("", $numbers);
    /* var_dump($characters); */
    $characters_length = strlen($characters);
    $new_password = "";
    for ($i = 0; $i < $length; $i++) {
        $new_password .= $characters[random_int(0, $characters_length - 1)];
    }
    return $new_password;
}

   

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
            <button class="mx-auto" style="max-width: fit-content" type="submit">
                Generate Password
            </button>
        </form>
        <div class="my-4 text-center">
            La tua nuova password:
            <?php
            $password_desired_length = 0;
        
        if (isset($_GET['password_length'])) {
            $password_desired_length = (int)$_GET['password_length'];
            echo "<strong>" . generate_password($password_desired_length) . "</strong>";
        }
            ?>
        </div>
    </div>
</body>
</html>