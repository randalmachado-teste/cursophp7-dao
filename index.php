<?php

require_once("config.php");

$root = new Usuario();

$root->loadbyId(7);

echo $root;

?>