<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include Exercise</title>
</head>

<body>

  <?php

 /*  phpinfo(); */

 $name= 'Dani';
 $alter= 35;
 $istStudent= true;
 $geburtsjahr= '1988';
 $berechnetesAlter= date("Y")- $geburtsjahr;
 $zahl= "15";
 $istWahr= true;
 $string= "test";
 $a= 5;
 $b= 10;

 $summe= $a+ $b;
 $differenz= $b- $a;
 $produkt= $a* $b;
 $quotient= $b/ $a;
 $totalMinuten= rand(60, 800);
 $stunden= floor($totalMinuten/ 60);
 $minuten= $totalMinuten% 60;

 if ($istStudent== true){
    $result= 'Ja';
 } else{
  $result= 'Nein';
 }

 echo '<p>Mein Name ist ' . $name . ' Ich bin ' . $alter . ' Jahre alt. Bin Ich Student? '  . $result . '</p>';

 echo "<p>Mein Name ist $name Ich bin $alter Jahre alt. Bin Ich Student? $result</p>";

 echo "<p>Mein Name ist $name Ich bin $berechnetesAlter Jahre alt und im Jahr $geburtsjahr geboren.</p>";

 $zahlAlsInt= (int)$zahl;

 $zahl= (string)$zahlAlsInt;

 $istWahrAlsString= (string)$istWahr;

 $istWahrAlsInteger= (int)$istWahr;

 $zahlAlsBoolean= (bool)$zahl;

 $stringAlsBoolean= (bool)$string;


 echo gettype($zahl);
 echo "<br>";
 echo gettype($istWahrAlsInteger);
 echo "<br>";
 echo gettype($zahlAlsBoolean);
 echo "<br>";
 echo gettype($stringAlsBoolean);
 echo "<br>";
 echo gettype($istWahrAlsString). "<br>";
 echo "Summe: $summe <br>";
 echo "Differenz: $differenz <br>";
 echo "Produkt: $produkt <br>";
 echo "Quotient: $quotient <br>";

 echo "minuten gesammt: $totalMinuten <br>";
 echo "Stunden: $stunden <br>";
 echo "Minuten: $minuten"
 




  ?>

</body>

</html>