<?php
$j = 10; //on fera un tableau  de 9
echo "<table border='1' bgcolor='#ffd700' cellspacing='3' cellpadding='10'  >"; //j'ouvre le tableau
echo "<tr>"; //j'ouvre une ligne

echo "<th>X</th>"; //cellule X (en haut à gauche)
//on va écrire la première ligne du tableau, 1->9
$i = 1;
while ($i<$j){
    echo "<th>".$i."</th>";
    $i++;
}
echo "</tr>"; //je referme la première ligne

//je vais compléter le tableau en affichant une colonne avec les valeurs non calculées et le corps du tableau avec les valeurs calculées
$x = 1;
while($x<$j){
    echo "<tr>"; //a chaque boucle j'ouvre une ligne
    echo "<th>".$x."</th>"; //j'affiche la valeur dans la première case 1 a9
    //je vais parcourir les chiffres de 1 à 9 pour les multiplier par la valeur de la ligne courante ($x)
    $y = 1;
    while($y<$j){
        echo "<td bgcolor='#b22222' style='color: white' >".($x*$y)."</td>"; //à chaque boucle j'ouvre une case, j'affiche le résultat de la multiplication et je referme la case
        $y++;
    }
    echo "</tr>"; //je ferme la ligne
    $x++;
}

?>