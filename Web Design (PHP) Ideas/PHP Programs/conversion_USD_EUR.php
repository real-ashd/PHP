<!DOCTYPE html>
<html>
<body>
<h1 align="center">USD->EUR Currency Conversion</h1>
<?php
//Define Exchange Rate
//1.00 USD = 0.80 EUR
define('EXCHANGE_RATE',0.80);
//Define the number of Dollars
$dollars=200;
//Perform the conversion
$euros=$dollars*EXCHANGE_RATE;
echo "$dollars USD is equivalent to : $euros EUR";
?>
</body>
</html>