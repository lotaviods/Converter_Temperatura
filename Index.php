<?php
require 'Converter.php'; ?>
<html>
<head>
<title>Curso PHP Progressivo</title>
</head>
<body>
<form action='index.php' method="get">
Temperatura em Celsius: <input type="text" name="C"><br>
<input type="submit">
<br>
Temperatura em Farenheight : <input type="text" name="F"><br>
</br>
<input type="submit">
</form>
<?php
if ($_GET ['C'] == ''){
    $TempF = new Converter();
    $F = $_GET['F'];
    $C = $TempF->FtoC($F);
    echo "Em Celsius: $C <br /><br />";
}elseif ($_GET ['F'] == ''){

    $TempC = new Converter();
    $C = $_GET['C'];
    $F = $TempC->CtoF($C);
    echo "Em Farenheit: $F <br /><br />";
}else echo "Digite um numero por vez";
?>

 </body>
</html>