<?php
class Prodotto{
    public $prezzo;

    public $descrizione;

    public $disponibilità;

    public function __construct($_prezzo, $_descrizione, $_disponibilità) {
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;
        $this->disponibilità = $_disponibilità;
    }
}

?>