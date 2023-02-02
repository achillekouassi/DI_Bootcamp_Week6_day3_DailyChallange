<?php
if (!empty($_GET)) {
    $unite = $_GET["unite"];
    if ($unite <= 50) {
        echo $unite = $unite * 3.50 . "fr";
    }

    elseif ($unite <= 100) {
        echo $unite = $unite * 4.00 . "fr";
    }

    elseif (($unite > 100) && ($unite <= 250)) {
        echo $unite = $unite * 5.20 . "fr";

    }

    else {
        echo $unite = $unite * 5.50 . "fr";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">Entrer les unités de votre factures</label><br>
        <input type="number" name="unite">
        <input type="submit">
    </form>
</body>
</html>