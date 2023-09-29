<?php

include __DIR__ . "./Models/Movie.php";
include __DIR__ . "./Models/Genere.php";

$categoria_1 = new Genere("azzurro");
$categoria_2 = new Genere("Aabbano");

$movie_1 = new Movie("ciccio", "spavento", 120, "dell'amore", 4, );
$movie_1->test = "eccolo";
// $movie_1->title = "il signore degli anelli";

$movie_2 = new Movie("lollo", "a", 12.4, "a", "a", );
// $movie_2->language = "italiano";

?>