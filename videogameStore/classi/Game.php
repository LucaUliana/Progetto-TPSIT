<?php

class Game{
    public $nome;
    public $nomeSviluppatore;
    public $valutazione;

    function __construct($pNome, $pNomeSviluppatore, $pValutazione){
        $this->nome = $pNome;
        $this->nomeSviluppatore = $pNomeSviluppatore;
        $this->valutazione = $pValutazione;
    }
}
    
?>