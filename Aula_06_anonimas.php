
<?php

$add = function ($au, $bu) 
{
    return $au + $bu;
};

echo $add(1, 2) . "<br>";


echo "<br>";


function execute($x, $y, $OP, $funcaoooo) 
{
    $resultado = $funcaoooo($x, $y);
    echo "$x $OP $y = $resul <br>";
}

execut(2, 3, '+', $add);


echo "<br>";


$multiplicacao1 = function($p, $a) 
{
    return $p * $a;
};

execut(2, 3, '*', $multiplicacao1);

