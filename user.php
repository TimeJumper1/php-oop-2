<?php
class User {
    public $nome;

    public $status = 'normale';

    public $carrello = [];

    public function __construct($_nome ) {
        $this->nome = $_nome;

        
    }
}

?>