<?php

class Game{
    public $nome;
    public $nomeSviluppatore;
    public $valutazione;
    public $prezzo;
    public $immagine;
    public $acquistato;
    public $descrizione;

    function __construct($pNome, $pNomeSviluppatore, $pValutazione, $pPrezzo, $pimmagine, $pAcquistato, $pDescrizione){
        $this->nome = $pNome;
        $this->nomeSviluppatore = $pNomeSviluppatore;
        $this->valutazione = $pValutazione;
        $this->prezzo = $pPrezzo;
        $this->immagine = $pimmagine;
        $this->acquistato = $pAcquistato;
        $this->descrizione = $pDescrizione;
    }
}
    
?>
