<form action="" method="get">
    Liczba:<input type="text" name="multi"><br>
    A:<input type="text" name="a">
    B:<input type="text" name="b"><br>
    C:<input type="text" name="c">
    D:<input type="text" name="d">
    <input name="sub" type="submit" value="git">
</form>

<?php
$m=$_GET['multi'];
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];

$w1;
$w2;
$w3;
$w4;

$w1=$m*$a;
$w2=$m*$b;
$w3=$m*$c;
$w4=$m*$d;

echo "Nie wiem co to: $w1 $w2 $w3 $w4";
?>