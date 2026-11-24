<?php
// etape 1
function addition(float $a,float $b): float {
    return $a + $b;
}

function soustraction(float $a,float $b): float {
    return $a - $b;
}
function division(float $a,float $b): float {

if($b == 0){
    throw new InvalidArgumentException("Division par zéro impossible");
}
    return $a /$b;
}


// etape 1
// 1 
function estpaire(int $n):bool{
    if ($n % 2 == 0){
        return true;
    }
    else{
        return false;
    }
}
 
// 2


function estpositif(float $n):bool{
    if($n > 0){
        return true;
    }
    else{
        return false;
    }
}

// 3
function maximum(float $a, float $b, float $c): float {

    $m = ($a > $b) ? $a : $b;

    return ($m > $c) ? $m : $c;
}

function maxi(float $a,float $b,float $c): float {
 return max($a,$b,$c);
}
// 4
 function estPremier(int $n): bool{
    if ($n<2){
       return true  ;
    }else{
       for ($i = 2;$i<=floor(sqrt($n));$i++){
        if ($n%$i==0){
            return false;
        }
       }
       return true;
    }
        

}
// etape 3
//1
function calculerTTC(float $h, float $tva = 20.0): float{
  return $h * (1 + $tva / 100);
}
// 2
function calculerRemise(float $prix, float $pourcentage): float{
    $prixApresRemise = $prix * (1 - $pourcentage / 100);
    return round($prixApresRemise, 2);
}
// 3
function calculerFacture(
    float $prixUnitaire,
    int $quantite,
    float $remise = 0,
    float $tva = 20.0
): float {
    $sousTotalHT = $prixUnitaire * $quantite;
    $montantApresRemiseHT = calculerRemise($sousTotalHT, $remise);
    return calculerTTC($montantApresRemiseHT, $tva);
}
// 4
function formaterMAD(float $montant): string
{
    return number_format($montant, 2, ",", " ") . " MAD";
}

// etape 4 


// 1
function moyenne(float ...$notes): float
{
    if (count($notes) === 0) {
        return 0.0;
    }
    return array_sum($notes) / count($notes);
}

// 2
function aireCercle(float $rayon): float
{
    return round(M_PI * ($rayon ** 2), 2);
}

function perimetreCercle(float $rayon): float
{
    return round(2 * M_PI * $rayon, 2);
}

// 3
function celsiusVersFahrenheit(float $c): float
{
    return $c * 9 / 5 + 32;
}

function fahrenheitVersCelsius(float $f): float
{
    return ($f - 32) * 5 / 9;
}

// 4
function convertirDevise(float $montant, float $taux): float
{
    return $montant * $taux;
}



// etape 5

// 1
function factorielle(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException("La factorielle n'est pas définie pour un entier négatif.");
    }

    $resultat = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultat *= $i;
    }

    return $resultat;
}

// 2.
function fibonacci(int $n): array
{
    if ($n <= 0) {
        return [];
    }

    if ($n === 1) {
        return [0];
    }

    $suite = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $suite[] = $suite[$i - 1] + $suite[$i - 2];
    }

    return $suite;
}
// 3
function pgcd(int $a, int $b): int
{
    $a = abs($a);
    $b = abs($b);

    while ($b !== 0) {
        $reste = $a % $b;
        $a = $b;
        $b = $reste;
    }

    return $a;
}
// 4  (par boucle, sans ** ni pow())
function puissanceBoucle(float $x, int $n): float
{
    if ($n === 0) {
        return 1.0;
    }

    if ($n < 0) {
        return 1.0 / puissanceBoucle($x, -$n);
    }

    $resultat = 1.0;
    for ($i = 0; $i < $n; $i++) {
        $resultat *= $x;
    }

    return $resultat;
}
// 4(version récursive, sans ** ni pow())
function puissanceRecursive(float $x, int $n): float
{
    if ($n === 0) {
        return 1.0;
    }

    if ($n < 0) {
        return 1.0 / puissanceRecursive($x, -$n);
    }

    return $x * puissanceRecursive($x, $n - 1);
}
?>