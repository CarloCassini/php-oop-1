<?php


class Movie extends Production
{
    use Hurra;
    public int $published_year;
    public int $running_time;

    function __construct(
        $title,
        $genere,
        $language,
        $averageRate,
        $published_year,
        $running_time
    ) {
        parent::__construct(
            $title,
            $genere,
            $language,
            $averageRate
        );

        $this->published_year = $published_year;
        $this->running_time = $running_time;


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
        <strong> published_year: </strong>$this->published_year, <br>
        <strong> running_time: </strong>$this->running_time, <br>
        <strong> averageRate: </strong>$this->averageRate, <br>

        ";
    }
}
;

?>