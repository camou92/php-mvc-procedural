<?php require('header.html');

if(isset($message)) echo $message; ?>

<center>
<h2>Liste de tous les cours</h2>
<h4>Il y'a <?=$nb_courses ?> cours</h4>

<table border="1">
    <tr>
        <th>Code du cours</th>
        <th>Intitulé du cours</th>
        <th>Langue d'enseignement</th>
    </tr>

<?php 
$ligne = $resultGetCourses->fetchAll(PDO::FETCH_NUM);
echo "<tr>";
foreach($ligne as $valeur){
    echo "<td>$valeur[1]</td>";
    echo "<td>$valeur[2]</td>";
    echo "<td>$valeur[3]</td>";

    echo "<tr>";
}
echo "</table></center>";

require('footer.html');