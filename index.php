<?php
include "connect.php";
?>
<table>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <h1>Welkom op het netland beheerderspaneel</h1>
  <table style="width:400px">
    <tr><th>Series</th>
    <th>Rating</th>
    <td style="text-align:center"></td></tr>
<?php

$series = $pdo->query('SELECT title,rating,id FROM series');
echo "<h1>Series</h1>";

while ($show = $series->fetch()){
    $_GET['id_s'] = $show['id'];
    echo "<tr><td>";
    echo $show['title'].'</td>';
    echo "<td >". $show['rating']."</td>";
    echo '<td><a href="series.php?title='.$show['id'].'">Bekijk Details</a>  </td>';

    echo "</tr>";
    }
 

?>

</table>



<table style="width:400px">
<tr><th>Movies</th>
    <th>Duur</th>
    <td style="text-align:center"></td></tr>

        <?php


$movies = $pdo->query('SELECT title,duur,id FROM movies');
echo "<h1>Movies</h1>";
while ($show = $movies->fetch()){
    echo "<tr>";
    echo "<td>".$show['title'].'</td><td>'. $show['duur'];"</td>";
    echo '<td><a href="films.php?title='.$show['id'].'">Bekijk Details</a>  </td>';
    
    echo "</tr>";
    }
        ?>




</table>
</body>

</html>