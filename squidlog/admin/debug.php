<?php

if ($debug) {

  echo "<hr><b>Variaveis de Sessão</b><pre>";
  print_r($_SESSION);
  echo "</pre>";

  echo "<hr><b>Variaveis GET</b><pre>";
  print_r($_GET);
  echo "</pre>";

  echo "<hr><b>Variaveis POST</b><pre>";
  print_r($_POST);
  echo "</pre>";

  echo "<hr><b>Variaveis FILE</b><pre>";
  print_r($_FILE);
  echo "</pre>";

};

/*
if ($debugBanco) {

  echo "<hr><b>Debug SQL</b><pre>".$GLOBALS['debugBancoSQL']."</pre>";


};

*/