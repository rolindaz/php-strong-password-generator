<!--  Milestone 1
Creare un form che invii in GET la lunghezza desiderata della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere minuscole, maiuscole, numeri e/o simboli) della lunghezza specificata, da restituire all’utente.
Scriviamo tutta la logica ed il layout in un unico file index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <h1>
        Password Generator
    </h1>

    <form action="">
        <label for="password_length">
            Write your password's desired length:
        </label>
        <input type="number" name="password_length" id="password_length" min=5 max=20>
        <button type="submit">
            Generate Password
        </button>
    </form>
</body>
</html>