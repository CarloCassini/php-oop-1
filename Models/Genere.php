<?php

class Genere
{
    public string $categoria;
    public bool $adulti = false;

    function __construct(
        $categoria,
    ) {
        $this->categoria = $categoria;
        Genere::SetVietato();
    }

    // metodi:
// per esercizio faccio in modo che tutti i generi che iniziano per A sono vietati ai bambini
    public function SetVietato()
    {
        if ($this->categoria[0] == 'a' || $this->categoria[0] == 'A') {
            $this->adulti = true;
        }
    }
    public function GetDetailsGenere()
    {
        return $this->categoria;
    }


}
;

?>