<?php
require_once __DIR__ . '/illegalItem.php';

class Dealer {
    use ProdottiIllegali;

    public $nome;

    public $prezzo;
    public function __construct($_prezzo, $_metodo_di_acquisizione, $_livello_di_pericolosità) {
        $this->prezzo = $_prezzo;
        $this->metodo_di_acquisizione = $__metodo_di_acquisizione;
        $this->livello_di_pericolosità = $_livello_di_pericolosità;
        if($_livello_di_pericolosità != 'molto alto') {
        
            throw new Exception(' il prodotto non può essere acquistato');
            
        } else {
            $this->livello_di_pericolosità= $_livello_di_pericolosità;
        }
    }
}




?>