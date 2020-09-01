<?php
include "connect.php";
$series = $pdo->query('SELECT title,rating,id FROM series');
$id = $_GET['title'];
$sort = 'title';

for ($i = 1; $i <= 6; $i++) {

    if ($_GET['title'] == $i) {

        $series = $pdo->query("SELECT * FROM series WHERE id=$id");
        while ($show = $series->fetch()) {
            echo "<h1>" . $show['title'] . ' - ' . $show['rating'] . "</h1>";
            if ($show['has_won_awards'] >= 1) {
                $yes = "ja";
            }else {
                $yes = "Nee";
            }
            echo "<p>Awards? " . $yes . "</p>";
            echo "<p>Seasons? " . $show['seasons'] . "</p>";
            echo "<p>Country? " . $show['country'] . "</p>" ;
            echo "<p>Language? " . $show['language'] . "</p>" ;
            echo $show['description'];
        };
    }
}

