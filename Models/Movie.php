<?php

class Movie
{
    public $title;
    public $genere;
    // qui ho testato come voglio che sia dichiarata una variabile
    public float $minutes;
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

    // metodi:

    public function TitleUpperCase()
    {
        $this->title = strtoupper($this->title);
    }


}
;

?>