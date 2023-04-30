 <?php
$servername = 'localhost';
$username = 'root';
$password = '';
try{
	$bdd = new PDO("mysql:host=$servername;dbname=bd_project_gs2e", $username, $password );
	//On définit le mode d'erreur de PDO sur Exception
    // $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Connexion réussie';
}
/*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/

 catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }

?>



 


