<?php

//% Costrutti ciclici

//, while
/* $a = 1;
while($a <= 10) {
    echo "Iterazione numero: $a<br>";
    $a++;
} */


//, do while
/* $a = 1;
do {
    echo "Iterazione numero: $a<br>";
    $a++;
} while ($a <= 10); */


//, for
/* for ($i = 1; $i <= 10; $i++) {
    echo "Numero: $i<br>";
} */

/* for ($i = 10; $i >= 1; $i--) {
    echo "Numero: $i<br>";
} */

//% altre keywords

//, continue
/* for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    } else {
        echo "Numero: $i<br>";
    }
}
 */
//, break
/* for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    } else {
        echo "Numero: $i<br>";
    }
} */


//% Iterare sui cicli
/* $fruits = ["mela", "banana", "arancia", "pera", "kiwi"];

$length = count($fruits);
for ($i = 0; $i < $length; $i++) {
    echo "Frutta alla posizione $i : $fruits[$i]<br>";
} */



//% foreach
//,fruits = ["mela", "banana", "arancia", "pera", "kiwi"];
/* foreach ($fruits as $fruit) {
    echo "Frutta: $fruit<br>";
} */
/* foreach ($fruits as $key => $fruit) {
    echo "$key. Frutta: $fruit<br>";
} */


//% range()
/* $numbers = range(1, 10, 3);
echo '<pre>';
print_r($numbers);
echo '</pre>'; */

/* foreach (range(1, 10, 3) as $number) {
    echo "Il numero è: $number <br>";
} */



//% list() e each()
//, list()
/* $fruits = ["mela", "banana", "arancia", "pera", "kiwi"];
list($a, $b, $c, $d, $e) = $fruits;
echo "A: $a <br> B: $b <br> C: $c <br> D: $d <br> E: $e <br>"; */

//, each()
/* $fruits = ["mela", "banana", "arancia", "pera", "kiwi"];
while (list($indice, $valore) = each($fruits)) {
    echo "$indice: $valore\n";
} */



//% list() e each()
//, list()
/* $fruits = ["mela", "banana", "arancia", "pera", "kiwi"];
list($a, $b, $c, $d, $e) = $fruits;
echo "A: $a <br> B: $b <br> C: $c <br> D: $d <br> E: $e <br>"; */


//, each()
/* $fruits = ["mela", "banana", "arancia", "pera", "kiwi"];
while (list($indice, $valore) = each($fruits)) {
    echo "$indice: $valore\n";
}
 */



//, Iterare su array multidimensionali
/* // Array multidimensionale
$students = [
    ['name' => 'Mario', 'age' => 20, 'grades' => [78, 80, 82]],
    ['name' => 'Luigi', 'age' => 22, 'grades' => [88, 85, 90]],
    ['name' => 'Peach', 'age' => 21, 'grades' => [92, 95, 98]],
];
// Ciclo foreach esterno per scorrere ogni studente
foreach($students as $student) {
    echo "Nome: " . $student['name'] . "<br>";
    echo "Età: " . $student['age'] . "<br>";
    // Ciclo foreach interno per scorrere le voti di ogni studente
    echo "Voti: ";
    foreach($student['grades'] as $grade) {
        echo $grade . " ";
    }
    echo "<br><br>";
} */