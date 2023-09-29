<?php

class Movie
{
    public $title;
    public $genere;
    public $minutes;
    public $language;
    public $averageRate;
    // questo elemento è gestito all'infori del costruct
    public $test;

    function __construct(
        $title,
        $genere,
        $minutes,
        $language,
        $averageRate
    ) {
        $this->title = $title;
        $this->genere = $genere;
        $this->minutes = $minutes;
        $this->language = $language;
        $this->averageRate = $averageRate;

    }

}
;

?>