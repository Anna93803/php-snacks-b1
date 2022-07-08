<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$arraySquadre = [
    [
        "squadraCasa" => "Atlanta",
        "puntiSquadraCasa" => rand(0,65),
        "squadraOspite" => "Dallas",
        "puntiSquadraOspite" => rand(0,65),
    ],
    [
        "squadraCasa" => "Boston",
        "puntiSquadraCasa" => rand(0,65),
        "squadraOspite" => "Chicago",
        "puntiSquadraOspite" => rand(0,65),
    ],
    [
        "squadraCasa" => "Detroit",
        "puntiSquadraCasa" => rand(0,65),
        "squadraOspite" => "Indiana",
        "puntiSquadraOspite" => rand(0,65),
    ],
    [
        "squadraCasa" => "Denver",
        "puntiSquadraCasa" => rand(0,65),
        "squadraOspite" => "Charlotte",
        "puntiSquadraOspite" => rand(0,65),
    ],
];

// var_dump($arraySquadre);

// for($i = 0; $i < count($arraySquadre); $i++) {
//     $squadra = $arraySquadre[$i];

//     echo $squadra["squadraCasa"] . " " . $squadra["squadraOspite"] . " " . " | " . $squadra["puntiSquadraCasa"] . " - " . $squadra["puntiSquadraOspite"];
// }

// echo $squadra;

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
    
    <div class="container">
        <div class="text-center my-5">
            <h1>Basket</h1>

            <?php for($i = 0; $i < count($arraySquadre); $i++) {
                $squadra = $arraySquadre[$i];
            ?> 
            <div>
                <span><?php echo $squadra["squadraCasa"] . " - " . $squadra["squadraOspite"] . " " . " | " . $squadra["puntiSquadraCasa"] . " - " . $squadra["puntiSquadraOspite"] ?></span>
            </div>
            
            <?php }?>

        </div>
    </div>
</body>
</html>