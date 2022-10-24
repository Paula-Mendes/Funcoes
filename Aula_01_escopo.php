
<?php
function printMessage() 
{
    echo "Hello! <br>";
    echo "Hello Wordl!<br>";
}

printMessage();
printMessage();
printMessage();

echo "<br>";

$variable = 10;

function exchangeValue() 
{
    $variable = 20;
    echo "Before: $variable <br>";
}

echo "Before: $variable <br>";
trocaValor();
echo "After: $variable <br>";

echo "<br>";

function changeTruthValue() 
{
    global $variable;
    $variable = 3;
    echo "During function: $variable <br>";
}

echo "Before: $variable <br>";
trocaValorDeVerdade();
echo "After: $variable <br>";