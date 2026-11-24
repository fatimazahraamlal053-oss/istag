<?php
require_once __DIR__ . "/fonction.php";
// etape 1//////////////////////////////////
 $a = 5;
 $b = 10;
 echo   $a."+" .$b." = " .addition($a, $b)."<br>";
 echo  $a."-".$b." = " .soustraction($a, $b)."<br>";
echo "division :".division(10, 0);
try {
    echo $a."/" .$b." = " .division($a, $b)."<br>";
}
catch (InvalidArgumentException $e){
    echo $e->getMessage();
}


// etape 2//////////////////////////////////////////


echo estpaire(4)?'paire':'impair';
echo estpositif(-4)?'positif':'negatif';
echo maximum(5, 10, 15);
echo maxi(5, 10, 15);
  echo estPremier(12)?"premier":"non";



// etape 3///////////////////////////////////////////
echo calculerTTC(100);
$montant = calculerFacture(100, 10, 10, 20.0);
echo "Facture (10 x 100 MAD, remise 10%, TVA 20%) : " . number_format($montant, 2, ",", " ") . " MAD";
$prixRemise = calculerRemise(250, 15);
echo "Prix après remise 15% sur 250 MAD :" . number_format($prixRemise, 2, ",", " ") . " MAD";
// etape 4/////////////////////////////////
// 1
echo "Moyenne (14, 16, 12.5) : " . moyenne(14, 16, 12.5) ;
echo "Moyenne (aucune note) : " . moyenne() ;
// 2
echo "Aire cercle (r=5) : " . aireCercle(5) ;
echo "Périmètre cercle (r=5) : " . perimetreCercle(5);
// 3
echo "25°C en Fahrenheit : " . celsiusVersFahrenheit(25) ;
echo "77°F en Celsius : " . fahrenheitVersCelsius(77) ;
// 4
echo "1000 MAD en EUR (taux 0.092) : " . convertirDevise(1000, 0.092);

// etape 5//////////////////////////////////////
// 1
echo "Factorielle de 5 : " . factorielle(5) ; 
echo "Factorielle de 0 : " . factorielle(0) ; 
try {
    echo factorielle(-3);
} catch (InvalidArgumentException $e) {
    echo "Exception attrapée : " . $e->getMessage();
}

// 2
$termes = fibonacci(8);
echo "Fibonacci (8 termes) : " . implode(", ", $termes);
// 3
echo "PGCD(48, 18) : " . pgcd(48, 18) . "<br>"; 
// 4
echo "Puissance boucle (2, 5) : " . puissanceBoucle(2, 5) ;
echo "Puissance récursive (2, 5) : " . puissanceRecursive(2, 5) ;
echo "Puissance négative (2, -2) : " . puissanceBoucle(2, -2) ;
?>