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
    <tr><th><a href='index.php?sort=title'>Series</th>
    <th><a href='index.php?sort=rating'>Rating</th>
    <td style="text-align:center"></td></tr>

<?php
    $sort = $_GET['sort'] ?? 'title';
    $series = $pdo->query('SELECT * FROM `series` ORDER BY `series`. ' . $sort . ' ASC');
    echo "<h1>Series</h1>";
while ($show = $series->fetch()) {
        $_GET['id_s'] = $show['id'];
        echo "<tr><td>";
        echo $show['title'] . '</td>';
        echo "<td >" . $show['rating'] . "</td>";
        echo '<td><a href="series.php?title=' . $show['id'] . '">Bekijk Details</a>  </td>';
        echo "</tr>";
    }
?>
</table>

<?php
$sorts = $_GET['sorting'] ?? 'title';
?>

    <table style="width:400px">
    <tr><th><a href="index.php?&sorting=title">Movies</th>
    <th><a href='index.php?index.php?&sorting=duur'>Duur</th>
    <td style="text-align:center"></td></tr>
    <?php
    $movies = $pdo->query('SELECT title,duur,id FROM movies ORDER BY `movies`. ' . $sorts . ' ASC');
    echo "<h1>Movies</h1>";
    while ($show = $movies->fetch()){
        echo "<tr>";
        echo "<td>".$show['title'] . '</td><td>' . $show['duur'];"</td>";
        echo '<td><a href="films.php?title=' . $show['id'] . '">Bekijk Details</a>  </td>';
        echo "</tr>";
    }
        ?>
    </table>
</body>
</html>