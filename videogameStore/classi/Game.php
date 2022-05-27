<?php

class Game{
    private $nome;
    private $nomeSviluppatore;
    private $valutazione;

    function __construct($pNome, $pNomeSviluppatore, $pValutazione){
        $this->nome = $pNome;
        $this->nomeSviluppatore = $pNomeSviluppatore;
        $this->valutazione = $pValutazione;
    }
}

?>