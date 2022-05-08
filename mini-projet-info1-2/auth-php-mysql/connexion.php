<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=gestionetudiant","root","");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>