<?php


class Production
{
    public $title;
    public $genere;
    // qui ho testato come voglio che sia dichiarata una variabile
    public $language;
    public $averageRate;

    function __construct(
        $title,
        $genere,
        $language,
        $averageRate
    ) {
        $this->title = $title;
        $this->genere = $genere;
        $this->language = $language;
        $this->averageRate = $averageRate;

    }

    // metodi:

    public function TitleUpperCase()
    {
        $this->title = strtoupper($this->title);
    }

    public function GetDetails()
    {

        return $this->title;
        // $this->testoGeneri;
        // return $this->$title . ", " $this->$genere . ", " $this->language  . ", "$this->$averageRate;
    }

}
;

?>