<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = key_exists("name", $_GET) ? $_GET["name"] : "";
$email = key_exists("email",  $_GET) ? $_GET["email"] : "";
$eta = key_exists("eta", $_GET) ? $_GET["eta"] : "";

$validName = (strlen($name) > 3) !== false;
$validEmail = (strpos($email, ".") !== false) && (strpos($email, "@") !== false) ;
$validEta = is_numeric($eta) == true;

$valid = false;

if($validName &&  $validEmail && $validEta) {
    $valid = true;
}

// var_dump( $validName);
// var_dump( $validEmail);
// var_dump($validEta);

// if(strlen($name) <= 3) {
//     $controlName = false;
//     echo "Nome non valido";
// }else {
//     echo "Nome Valido";
// }

// $controlEmail = false;

// if(strpos($email, ".") && strpos($email, "@")) {
//     $controlEmail = true;
//     echo "email Valida";
// }else {
//     echo "email non valida";
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
    <div class="container">
        <form class="py-5">
            <div>
                <label class="form-label">Nome Utente</label>
                <input class="form-control" type="text" placeholder="Inserisco il nome" name="name" value="<?php echo $name ?>"> 
            </div>
            <div>
                <label class="form-label">Email</label>
                <input class="form-control" type="email" placeholder="Inserisci la email" name="email" value="<?php echo $email ?>">
            </div>
            <div>
                <label class="form-label">Età</label>
                <input class="form-control" type="number" placeholder="Inserisci l'età" name="eta" value="<?php echo $eta ?>">
            </div>
            <button class="btn btn-success my-3" type="submit">Invia</button>
            
        </form>

        <?php if($valid) { ?>
            <div class="alert alert-success">Accesso Riuscito</div>
        <?php } else { ?>
            <div class="alert alert-danger">Accesso Negato</div>
        <?php } ?>

    </div>
</body>
</html>