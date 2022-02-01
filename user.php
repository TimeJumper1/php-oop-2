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
    public function getCarrello() {
        return $this->carrello;
        
        
    }
    public function premiumDiscount($test) {
        if($this->status = 'premium') {
            $prezzo_scontato = 0;
            $this->$prezzo_scontato = $prezzo - ($prezzo * 20/100) ;
            return $prezzo_scontato;
        }
        
    }
}

?>