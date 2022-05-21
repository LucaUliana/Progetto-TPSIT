<?php
// carica il codice della classe JSONDB e della classe SmartTV
require_once("JSONDB.php");
require_once("json.php");
require_once("dataTypes.php");


// specifica di usare la classe JSONDB presente nello namespace Jajo
use \Jajo\JSONDB;


class GameRepository {
    private static string $directoryDB = __DIR__;
    private static string $tableName = 'Game';
    private static string $fileName = 'Game.json';

    /**
     * Restituisce un array di tutte le istanze di SmartTV presenti nel database
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
            // scandisce tutto l'array ricavato con la query, istanzia le SmartTV, aggiunge all'array dei risultati
            foreach ($arrayDB as $objDB) {
                $objGame = new Game(
                    $objDB["Nome"],
                    $objDB["Software_House"]
                );
                // ultimo volume memorizzato (attributo di stato)
                // aggiunge l'istanza di SmartTV all'array
                $arrayGame[] = $objGame;
            }
        } catch (\Throwable $th) {
            // throw $th;
        }
        return $arrayGame;
    }
}

?>