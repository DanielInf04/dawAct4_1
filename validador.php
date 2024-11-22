<?php
if(isset($_GET['name'])) {
  $nombre = $_GET['name'];
  echo 'Hola '.$nombre;
} else {
  echo 'No has introducido ningun nombre!!!';
}
?>
