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