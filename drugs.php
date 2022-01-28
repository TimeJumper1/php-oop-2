<?php
require_once __DIR__ . '/product.php';

class Medicinale extends Prodotto {
    // override
    public $prescrizione;

    public $bugiardino;

    // override
    public function __construct($_prezzo, $_descrizione, $_disponibilità, $_bugiardino ,$_prescrizione){
        parent::__construct($_prezzo, $_descrizione, $_disponibilità);
        $this->bugiardino = $_bugiardino;
        $this->prescrizione = $_prescrizione;
    }
}
?>