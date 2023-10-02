<?php

class Movie extends Production
{
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


}
;

?>