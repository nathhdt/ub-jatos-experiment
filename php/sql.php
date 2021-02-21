<?php
  $db_host = 'localhost';
  $db_user = 'lead';
  $db_password = 'motdepasse';
  $db_db = 'jatos_experiment';
  $db_port = 3306;

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Erreur: '.$mysqli->connect_error;
    exit();
  }
?>