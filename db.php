<?php

include __DIR__ . "./Models/Production.php";
include __DIR__ . "./Models/Movie.php";
include __DIR__ . "./Models/Genere.php";

// le categorie sono le seguenti:
$categoria_1 = new Genere("azzurro");
$categoria_2 = new Genere("babbano");
$categoria_3 = new Genere("Foruncoloso");


$array_categorie = [];
$array_categorie[] = $categoria_1;
$array_categorie[] = $categoria_2;

$movie_1 = new Movie("ciccio", $array_categorie, "dell'amore", 4, );

// $movie_1->title = "il signore degli anelli";

$movie_2 = new Movie("lollo", $categoria_3, 12.4, "a", "a", );
// $movie_2->language = "italiano";

?>