<?php

$connection = mysql_connect('localhost', 'root', '');

if (!$connection) {

  echo "Verbindung konnte nicht hergestellt werden.";

} else {

  mysql_select_db('test001', $connection);

  $query = mysql_query('SELECT * FROM `guestbook`;', $connection);

  while ($entry = mysql_fetch_assoc($query)) {

      echo '<div class="name">'.$entry['name'].' schrieb:</div>';
      echo '<div class="text">'.$entry['text'].'</div>';
      echo '<hr />';

  }
    
}