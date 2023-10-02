<?php


class TvSerie extends Production
{
    public int $aired_from_year;
    public int $aried_to_year;
    public int $number_of_episodes;
    public int $number_of_series;

    function __construct(
        $title,
        $genere,
        $language,
        $averageRate,
        $aired_from_year,
        $aried_to_year,
        $number_of_episodes,
        $number_of_series,

    ) {
        parent::__construct(
            $title,
            $genere,
            $language,
            $averageRate
        );

        $this->aired_from_year = $aired_from_year;
        $this->aried_to_year = $aried_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_series = $number_of_series;


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
        <strong> aired_from_year: </strong>$this->aired_from_year, <br>
        <strong> aried_to_year: </strong>$this->aried_to_year, <br>
        <strong> number_of_episodes: </strong>$this->number_of_episodes, <br>
        <strong> number_of_series: </strong>$this->number_of_series, <br>
        <strong> averageRate: </strong>$this->averageRate, <br>
        ";
    }

}
;

?>