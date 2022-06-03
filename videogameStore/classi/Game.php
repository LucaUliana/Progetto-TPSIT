<?php

class Game{
    public $nome;
    public $nomeSviluppatore;
    public $valutazione;
    public $prezzo;
    public $immagine;
    public $acquistato;
    public $descrizione;
    public $controller;

    function __construct($pNome, $pNomeSviluppatore, $pValutazione, $pPrezzo, $pimmagine, $pAcquistato, $pDescrizione, $pController){
        $this->nome = $pNome;
        $this->nomeSviluppatore = $pNomeSviluppatore;
        $this->valutazione = $pValutazione;
        $this->prezzo = $pPrezzo;
        $this->immagine = $pimmagine;
        $this->acquistato = $pAcquistato;
        $this->descrizione = $pDescrizione;        
        $this->controller = $pController;
    }

    function compra(){
		$jsonString = file_get_contents('../repository/Games.json');
		$data = json_decode($jsonString, true);

		$data[1]["acquistato"] = true;

		$newJsonString = json_encode($data);
		file_put_contents('../repository/Games.json', $newJsonString);
	}
}
    
?>