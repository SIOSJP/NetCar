<?php
class ConnexionBdPdo
{
    // instance de la classe
    private static $lInstanceSingleton=null;
	
	// attribut de classe : objetPDO pour interagir avec la base de données.
	private static $objPDO;

    // Un constructeur privé ; empêche la création directe d'objet
    private function __construct() 
    {
        try{
			self::$objPDO=new PDO('mysql:host=localhost;dbname=bdNetCar','root','root');
			self::$objPDO->query("SET CHARACTER SET utf8");
			//echo "<br/>connexion réussie.<br/>";
		}
		catch ( PDOException $erreur){
			echo "Erreur de connexion à la base de données ".$erreur->getMessage();
		}
    }

    // La méthode singleton
    public static function getLInstanceSingleton() 
    {  if(self::$lInstanceSingleton == null)
       {  
          self::$lInstanceSingleton= new ConnexionBdPdo();
       }

        return self::$lInstanceSingleton;
    }

    // Exemple d'une méthode de l'instance de la classe ConnexionBdPdo
    public function getLesAgences()
    {
        $req = "select * from agence";
        $res = self::$objPDO->query($req);

		$lesLignes = $res->fetchAll();
		return $lesLignes;
        
    }
}

?>
