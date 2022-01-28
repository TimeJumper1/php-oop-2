<?php
class User{
    public $nome;

    public $status = normale;

    public $carrello = [];

    public function __construct($_nome, $_status, ) {
        $this->nome = $_nome;
        $this->status = $_status;
        ;
    }
}

?>