<form action="" method="get">
    Kwota:<input type="text" name="price">
    Podatek:<input type="text" name="tax">
    <input name="sub" type="submit" value="git">
</form>

<?php
$price=$_GET['price'];
$tax=$_GET['tax'];
$aftertax;
$tax=$tax/100;
$aftertax=$price*(1-$tax);
echo "Cena netto: $aftertax";
?>
