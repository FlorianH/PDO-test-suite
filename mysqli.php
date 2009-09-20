<?php

$connection = new mysqli('localhost', 'root', '', 'test001');

if (!$connection) {

  echo "Verbindung konnte nicht hergestellt werden.";

} else {

  $result = $connection->query('SELECT * FROM `guestbook`;');

  while ($entry = mysqli_fetch_array($result)) {

      echo '<div class="name">'.$entry['name'].' schrieb:</div>';
      echo '<div class="text">'.$entry['text'].'</div>';
      echo '<hr />';

  }
    
}