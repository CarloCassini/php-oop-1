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

        return "
        <strong> titolo: </strong>$this->title, <br>
        <strong> language: </strong>$this->language, <br>
        <strong> averageRate: </strong>$this->averageRate, <br>
        ";
    }

}
;

?>