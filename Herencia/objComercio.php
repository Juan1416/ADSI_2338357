<?php
      require_once("01_clase_persona.php");


      $objPersona = new Persona( 20010030, "Andrea Ruiz", 32);
      echo "<h2> Llamado a la clase Persona </h2><br>"; 
      echo " Cedula de la persona ". $objPersona-> getCedula() ;
      echo "Nombres: ". $objPersona->nombre."<br>";
