<?php
// carica il codice della classe JSONDB e della classe SmartTV
require_once("JSONDB.php");
require_once("json.php");
require_once("dataTypes.php");


// specifica di usare la classe JSONDB presente nello namespace Jajo
use \Jajo\JSONDB;


class GameRepository {
    private static string $directoryDB = __DIR__;
    private static string $tableName = 'Games';
    private static string $fileName = 'Games.json';

    /**
     * Restituisce un array di tutte le istanze di gioco presenti nel database
     * @return array Array delle istanze individuate
     */
    public static function estrai_tutti(): array {
        $arrayGame = [];
        try {
            // crea una istanza di database che fa rifeirmento alla directory specificata
            $db = new JSONDB(self::$directoryDB);
            // estrae tutte tutti gli elementi dal database con nome file smart_tvs.json
            $arrayDB = $db->select( '*' )
            	->from( self::$fileName )
                ->get();
            // scandisce tutto l'array ricavato con la query, istanzia i giochi, aggiunge all'array dei risultati
            foreach ($arrayDB as $objDB) {
                $objGame = new Game(
                    $objDB["nome"],
                    $objDB["nomeSviluppatore"],
                    $objDB["valutazione"],
                    $objDB["prezzo"],
                    $objDB["immagine"],
                    $objDB["acquistato"],
                    $objDB["descrizione"],
                    
                );
                // ultimo volume memorizzato (attributo di stato)
                // aggiunge l'istanza di giocho all'array
                $arrayGame[] = $objGame;
            }
        } catch (\Throwable $th) {
            // throw $th;
        }
        return $arrayGame;
    }

    public static function estrai(string $nome): ?Game {
        $objGame = null;
        try {
            // crea una istanza di database che fa rifeirmento alla directory specificata
            $db = new JSONDB(self::$directoryDB);
            // estrae tutte tutti gli elementi dal database con nome file smart_tvs.json
            $arrayDB = $db->select( '*' )
            	->from( self::$fileName )
                ->where( [ 'nome' => $nome ] )
                ->get();
            // ci deve essere un unico risultato
            foreach ($arrayDB as $objDB) {
                $objGame = new Game(
                    $objDB["nome"],
                    $objDB["nomeSviluppatore"],
                    $objDB["valutazione"],
                    $objDB["prezzo"],
                    $objDB["immagine"],
                    $objDB["acquistato"],
                    $objDB["descrizione"],
                );
            }
        } catch (\Throwable $th) {
            // throw $th;
        }
        return $objGame;
    }
}

?>