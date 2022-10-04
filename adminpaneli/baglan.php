<?php

 try {
 	@session_start();
 	ob_start();
   		$db=new PDO("mysql:host=localhost;dbname=erdemconcept",'root','');
   		//echo "Bağlantı Başarılı";
}

	catch (PDOExpception $e) {

		echo $e ->getMessage();

	}

  ?>