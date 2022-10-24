
<?php
function getMessage() 
{
    return "You're welcome!";
}

getMessage();
$p = getMessage();
echo $p;
echo "<br>", getMessage();
echo "<br>";

echo "<br>";

function getMessageName($name) 
{
    return "You're welcome, {$name}!";
}

echo "<br>", getMessageName("Paula");
echo "<br>", getMessageName("Mendes");

echo "<br>";

function somar($x, $y) 
{
    return $x + $y;
    
}

$x = 40;
$y = 50;
echo "<br>", somar(450, 780);
echo "<br>", soma($j, $k);

