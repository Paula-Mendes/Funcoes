
<?php
function saudation($name = "Senhor(a)", $sobrenome2 = "Client") 
{
    return "You're, $name $sobrenome2!<br>";
}

echo saudation();
echo saudation(null);
echo saudation(null, null);
echo saudation("Amado", "Mestre");

echo "<br>";

function takeFood($food, $drink = "Alcoholl") 
{
    echo "To eat: $food <br>";
    echo "To drink: $drink <br>";
}

takeFood("Sandwich");
//takeFood("Churrasco", "Gin");

echo "<br>";

function takeFood2($drink = "Champanhe", $food2) {
    echo "To eat: $food2 <br>";
    echo "To drink: $drink2 <br>";
}


anotarPedido2("Champanhe", "Macarronada");