<?php


// include __DIR__ . "./Models/Hurra.php";
include __DIR__ . "./Models/Production.php";
include __DIR__ . "./Models/Movie.php";
include __DIR__ . "./Models/TvSerie.php";
include __DIR__ . "./Models/Genere.php";

// array di tutti gli oggetti che andrò a creare:
$all_production = [];
// le categorie sono le seguenti:
$categoria_1 = new Genere("azzurro");
$categoria_2 = new Genere("babbano");
$categoria_3 = new Genere("Foruncoloso");


$array_categorie = [];
$array_categorie[] = $categoria_1;
$array_categorie[] = $categoria_2;

$movie_1 = new Movie("ciccio", $array_categorie, "dell'amore", 4, 1994, 120);
$all_production[] = $movie_1;

$movie_2 = new Movie("lollo", $categoria_3, "a", "a", 2008, 120);
$all_production[] = $movie_2;
$movie_3 = new Movie("lollo", $categoria_3, "a", "a", 2008, 120);
$all_production[] = $movie_3;

$array_categorie = [];
$array_categorie[] = $categoria_3;
$array_categorie[] = $categoria_3;

$tv_serie_1 = new TvSerie("rodrighetto va in campagna", $array_categorie, "singapense", 4, 2010, 2020, 3, 3);
$all_production[] = $tv_serie_1;
$tv_serie_2 = new TvSerie("rodrighetto va in campagna 2", $array_categorie, "singapense", 4, 2010, 2020, 3, 3);
$all_production[] = $tv_serie_2;
$tv_serie_3 = new TvSerie("rodrighetto va in campagna - l'armagheddon annunciato", $array_categorie, "singapense", 4, 2010, 2020, 3, 3);
$all_production[] = $tv_serie_3;

$movie_3 = new Movie("rodrighetto va in campagna - IL FILM ", $categoria_3, "a", "a", 2008, 120);
$all_production[] = $movie_3;
?>