<?php

include __DIR__ . "./Models/Movie.php";

$movie_1 = new Movie("ciccio", "spavento", 120, "dell'amore", 4, );
$movie_1->test = "eccolo";
// $movie_1->title = "il signore degli anelli";

$movie_2 = new Movie("lollo", "a", "a", "a", "a", );
// $movie_2->language = "italiano";

?>