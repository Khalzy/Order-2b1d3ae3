<?php
include "connect.php";
$series = $pdo->query('SELECT title,rating,id FROM series');


$id = $_GET['title'];


if ($_GET['title'] == 1){

    $series = $pdo->query("SELECT * FROM series WHERE id=$id");

    while(  $show = $series->fetch()){
    echo "<h1>".$show['title'].' - '.$show['rating']."</h1>";
    if($show['has_won_awards'] >= 1){
        $yes = "ja";
        
    }else{
        $yes = "Nee";
    }
    echo "<p>Awards? ".$yes."</p>";
    echo "<p>Seasons? ".$show['seasons']."</p>";
    echo "<p>Country? ".$show['country']."</p>" ;
    echo "<p>Language? ".$show['language']."</p>" ;
    echo $show['description'];

};

}


if ($_GET['title'] == 2){

    $series = $pdo->query("SELECT * FROM series WHERE id=$id");

    while(  $show = $series->fetch()){
    echo "<h1>".$show['title'].' - '.$show['rating']."</h1>";

    if($show['has_won_awards'] >= 1){
        $yes = "ja";
        
    }else{
        $yes = "Nee";
    }
    echo "<p>Awards? ".$yes."</p>";
    echo "<p>Seasons? ".$show['seasons']."</p>";
    echo "<p>Country? ".$show['country']."</p>" ;
    echo "<p>Language? ".$show['language']."</p>" ;
    echo $show['description'];

};

}


if ($_GET['title'] == 3){

    $series = $pdo->query("SELECT * FROM series WHERE id=$id");

    while(  $show = $series->fetch()){
    echo "<h1>".$show['title'].' - '.$show['rating']."</h1>";
    
    if($show['has_won_awards'] >= 1){
        $yes = "ja";
        
    }else{
        $yes = "Nee";
    }
    echo "<p>Awards? ".$yes."</p>";
    echo "<p>Seasons? ".$show['seasons']."</p>";
    echo "<p>Country? ".$show['country']."</p>" ;
    echo "<p>Language? ".$show['language']."</p>" ;
    echo $show['description'];

};

}


if ($_GET['title'] == 4){

    $series = $pdo->query("SELECT * FROM series WHERE id=$id");

    while(  $show = $series->fetch()){
    echo "<h1>".$show['title'].' - '.$show['rating']."</h1>";
    
    if($show['has_won_awards'] >= 1){
        $yes = "ja";
        
    }else{
        $yes = "Nee";
    }
    echo "<p>Awards? ".$yes."</p>";
    echo "<p>Seasons? ".$show['seasons']."</p>";
    echo "<p>Country? ".$show['country']."</p>" ;
    echo "<p>Language? ".$show['language']."</p>" ;
    echo $show['description'];

};

}

if ($_GET['title'] == 5){

    $series = $pdo->query("SELECT * FROM series WHERE id=$id");

    while(  $show = $series->fetch()){
    echo "<h1>".$show['title'].' - '.$show['rating']."</h1>";
    
    if($show['has_won_awards'] >= 1){
        $yes = "ja";
        
    }else{
        $yes = "Nee";
    }
    echo "<p>Awards? ".$yes."</p>";
    echo "<p>Seasons? ".$show['seasons']."</p>";
    echo "<p>Country? ".$show['country']."</p>" ;
    echo "<p>Language? ".$show['language']."</p>" ;
    echo $show['description'];

};

}


if ($_GET['title'] == 6){

    $series = $pdo->query("SELECT * FROM series WHERE id=$id");

    while(  $show = $series->fetch()){
    echo "<h1>".$show['title'].' - '.$show['rating']."</h1>";
    
    if($show['has_won_awards'] >= 1){
        $yes = "ja";
        
    }else{
        $yes = "Nee";
    }
    echo "<p>Awards? ".$yes."</p>";
    echo "<p>Seasons? ".$show['seasons']."</p>";
    echo "<p>Country? ".$show['country']."</p>" ;
    echo "<p>Language? ".$show['language']."</p>" ;
    echo $show['description'];

};

}