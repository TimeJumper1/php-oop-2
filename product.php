<?php
class Prodotto {
    public $prezzo;

    public $descrizione;

    public $disponibilit√†;

    public function __construct($_prezzo, $_descrizione, $_disponibilit√†) {
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;
        $this->disponibilit√† = $_disponibilit√†;
    }
}

?>