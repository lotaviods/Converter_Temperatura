<?php require 'Converter.php'; ?>
<?php
if ($_GET ['C'] == ''){
    $TempF = new Converter();
    $F = $_GET['F'];
    $C = $TempF->FtoC($F);
    echo "Em Celsius: $C <br /><br />";
    ?>  
    <?php
    }elseif ($_GET ['F'] == ''){
    $TempC = new Converter();
    $C = $_GET['C'];
    $F = $TempC->CtoF($C);
    echo "Em Farenheit: $F <br /><br />";
    }elseif ($_GET ['F'] == '' and $_GET ['C'] == ''){
        echo "Vazio";
    }else{
        echo "Dois campos preenchidos";
    }
    ?>
    <html> 
    <form action = "Index.html"> <button type="submit" class="btn btn-primary">Voltar</button> </form> 
