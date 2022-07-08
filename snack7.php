<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$alunni = [
    [
        "nome" => "Anna",
        "cognome" => "Rossi",
        "voti" => [
            "matematica" => 5,
            "inglese" => 8,
        ],
    ],
    [
        "nome" => "Andrea",
        "cognome" => "Bianchi",
        "voti" => [
            "italiano" => 9,
            "geografia" => 7,
        ],
    ],
    [
        "nome" => "Maria",
        "cognome" => "Verdi",
        "voti" => [
            "italiano" => 7,
            "geografia" => 7,
        ],
    ],
];


// for($i = 0; $i < count($alunni); $i++) {
//     $alunno = $alunni[$i];
//     echo $alunno["nome"] . " " . $alunno["cognome"];
//     $somma = array_sum($alunno["voti"]);
//     echo $somma;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container py-5 text-center">
        <?php for($i = 0; $i < count($alunni); $i++) { 
            $alunno = $alunni[$i];
            $somma = array_sum($alunno["voti"]);
            $mediaSomma = $somma / 2;
        ?>   
        <div>
            <h5>L'alunno: <strong><?php echo $alunno["nome"] . " " . $alunno["cognome"] ?></strong></h5>
            <span>Media voti: <?php echo $mediaSomma ?></span>
        </div>

        <?php } ?>
    </div>
</body>
</html>