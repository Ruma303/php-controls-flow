<?php

//% Costrutti condizionali


//$ if, else
/* if (true) {
    echo '<h2>Istruzioni if eseguite</h2>';
} else {
    echo '<h2>Istruzioni else eseguite</h2>';
}
 */

//$ if, elseif, else
/* $val = 10;
if ($val > 10) {
    echo '<h2>Istruzioni if eseguite</h2>';
} elseif ($val == 10) {
    echo '<h2>Istruzioni elseif eseguite</h2>';
} else {
    echo '<h2>Istruzioni else eseguite</h2>';
} */


/* $val = 10;
if ($val > 10) {
    echo '<h2>Istruzioni if eseguite</h2>';
} elseif ($val != 10) {
    echo '<h2>Primo elseif non eseguito</h2>';
} elseif ($val == "Ciao") {
    echo '<h2>Secondo elseif non eseguito</h2>';
} elseif ($val != 9) {
    echo '<h2>Terzo elseif eseguito</h2>';
} elseif ($val == 10) {
    echo '<h2>Quarto elseif non eseguito</h2>';
} else {
    echo '<h2>Istruzioni else non eseguite</h2>';
} */



//$ Condizioni composte
/* $a = 10;
$b = 20;
$c = 30;
if (($a < $b) && ($b < $c)) {
    echo "Entrambe le condizioni sono vere.<br>";
}
if ($a < $b || $b > $c) {
    echo "Almeno una delle condizioni è vera.<br>";
}
if ($a < $b xor $b > $c) {
    echo "Esattamente una delle condizioni è vera.<br>";
}
if (!$a > 20) {
    echo "$a non è maggiore di 20.<br>";
}
if (!($a > 20)) {
    echo "$a non è maggiore di 20.<br>";
} */



//$ Operatore ternario
/* $a = 10;
$b = 20;
echo ($a > $b) ? "$a è maggiore di $b" : "$a è minore di $b";
// Risultato: 10 è minore di 20 */


//$ Costrutto switch
/* $frutta = "fragola";
switch ($frutta) {
    case (5 > 10):
        echo "Hai scelto una banana.";
        break;
    case "mela":
        echo "Hai scelto una mela.";
        break;
    case "arancia":
    case "fragola":
    case "pompelmo":
        echo "Hai scelto un'arancia.";
        break;
    default:
        echo "Scelta non valida.";
} */



//$ Costrutto match
/* $frutta = "mela";
$message = match ($frutta) {
    "banana" => "Hai scelto una banana.",
    "mela" => "Hai scelto una mela.",
    "arancia" => "Hai scelto un'arancia.",
    default => "Scelta non valida.",
};
echo $message;
 */


