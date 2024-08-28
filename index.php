<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $tel = $_POST["telefone"];

        echo "Olá $nome $sobrenome";
        echo "<br>";
        echo "$email";
        echo "<br>";
        echo "$tel;"
    ?>
</body>
</html>