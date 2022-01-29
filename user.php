<?php
class User {
    public $nome;

    public $status = 'normale';

    public $carrello = [];

    public function __construct($_nome ) {
        $this->nome = $_nome;

        
    }
    public function aggiungiProdotto($prodotto) {
        $this->carrello[] = $prodotto;
        
    }
    public function premiumDiscount($test) {
        if($this->status = 'premium') {
            $this->prezzo = $prezzo - ( ($prezzo * 20) /100);
            
        }
        
    }
}

?>