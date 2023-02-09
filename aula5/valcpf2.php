<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/cpf.css">
</head>
<body>
    
</body>
</html>
<?php
    

    $cpf =$_GET['cpf'];
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

    
    if (strlen($cpf) != 11) {
        echo "cpf inválido, o código precisa ter 11 Dígitos";
        return false;
    };

    if ($cpf == '11111111111'||$cpf == '22222222222'||$cpf == '33333333333'||$cpf == '44444444444'||$cpf == '55555555555'||$cpf == '66666666666'||$cpf == '77777777777'||$cpf == '88888888888'||$cpf == '99999999999');
        echo "Cpf inválido<br>";

    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    };

    for ($tamanh = 9; $tamanh < 11; $tamanh++) {
    
        for ($digito_v = 0, $cont = 0; $cont < $tamanh; $cont++) {
            $digito_v += $cpf[$cont] * (($tamanh + 1) - $cont);
        }
        
        $digito_v = ((10 * $digito_v) % 11) % 10;
        if ($cpf[$cont] != $digito_v) {
            return false;
            echo "Cpf Inválido";
        }
        

    };
    echo" <div id= a> O CPF é Válido";

?>

<form action="./valcpf.php" method="get">
    <input type="button" value="Voltar" >
</form>