<?php

try {

  $connection = new PDO('mysql:host=localhost;dbname=test001', 'root', '', array(PDO::ATTR_PERSISTENT => true));

  foreach ($connection->query('SELECT * FROM `guestbook`;') as $entry) {
  
      echo '<div class="name">'.$entry['name'].' schrieb:</div>';
      echo '<div class="text">'.$entry['text'].'</div>';
      echo '<hr />';
  }
  
} catch (PDOException $e) {

  echo "Verbindung konnte nicht hergestellt werden.";

}