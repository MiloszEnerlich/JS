<form action="" method="get">
    A1:<input type="text" name="a">
    B1:<input type="text" name="b"><br>
    C1:<input type="text" name="c">
    D1:<input type="text" name="d">
    <br><br>
    A2:<input type="text" name="e">
    B2:<input type="text" name="f"><br>
    C2:<input type="text" name="g">
    D2:<input type="text" name="h">
    <input name="sub" type="submit" value="git">
</form>

<?php
$A1=$_GET['a'];
$B1=$_GET['b'];
$C1=$_GET['c'];
$D1=$_GET['d'];

$A2=$_GET['e'];
$B2=$_GET['f'];
$C2=$_GET['g'];
$D2=$_GET['h'];

$s1;
$s2;
$s3;
$s4;

$r1;
$r2;
$r3;
$r4;

$i1;
$i2;
$i3;
$i4;

$s1=$A1+$A2;
$s2=$B1+$B2;
$s3=$C1+$C2;
$s4=$D1+$D2;

$r1=$A1-$A2;
$r2=$B1-$B2;
$r3=$C1-$C2;
$r4=$D1-$D2;

$i1=$A1*$A2;
$i2=$B1*$B2;
$i3=$C1*$C2;
$i4=$D1*$D2;

echo "Jakies dodawanie: $s1 $s2 $s3 $s4<br>";
echo "Jakies odejmowanie: $r1 $r2 $r3 $r4<br>";
echo "Jakies mnozenie: $i1 $i2 $i3 $i4<br>";
?>