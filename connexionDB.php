<?php 

try {
  		$bdd = new PDO("mysql:host=localhost;dbname=sensearch", "root", "");

  		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}
 catch(PDOException $e) {

  		echo "Error : " . $e->getMessage();
}


 ?>