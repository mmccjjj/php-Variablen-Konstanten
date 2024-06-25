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
 $x= 10;
 $x++;
 $x--;
 $y= rand(1,10);
 $resultat= ($y% 2)== 0? "Wahr": "falsch";
 $message= "Hallo Liebe Trainer";
 $istKrank= true;
 $istFarbig= true;

 if ($istFarbig== true){
  define('MEINE_LIEBLINGS_FARBE', 'blau');
 }else{
  define('MEINE_LIEBLINGS_FARBE', 'weiss');
 }



 $summe= $a+ $b;
 $differenz= $b- $a;
 $produkt= $a* $b;
 $quotient= $b/ $a;
 $totalMinuten= rand(60, 800);
 $stunden= floor($totalMinuten/ 60);
 $minuten= $totalMinuten% 60;
 $kleinbuchstaben= "das sind alles kleinbuchstaben";
 $grossbuchstaben= strtoupper($kleinbuchstaben);
 $wiederklein= strtolower($grossbuchstaben);
 $erstergross= ucfirst($wiederklein);
 $jedesWort= ucwords($erstergross);
 $uhrzeit= "051223";

 if ($istStudent== true){
    $result= 'Ja';
 } else{
  $result= 'Nein';
 }

 if ($istKrank== true){
  $message.= " Leider bin ich heute Krank";
}else{
  $message.= " Ich freu mich auf den heutigen Unterricht";
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
 echo "Minuten: $minuten <br>";
 echo ++$x;
 echo "<br>";
 echo $x;
 echo "<br>";
 echo $y;
 echo "<br>";
 echo $resultat;
 echo "<br>";
 echo $message;
 echo "<br>";
 echo "Meine Lieblingsfarbe ist: " . MEINE_LIEBLINGS_FARBE;
 echo "<br>";
echo $grossbuchstaben;
echo "<br>";
echo $wiederklein;
echo "<br>";
echo $erstergross;
echo "<br>";
echo $jedesWort;
echo "<br>";
echo substr(chunk_split($uhrzeit, 2, ':'),0, -1);






 




  ?>

</body>

</html>