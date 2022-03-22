<?php
include_once("checaSessao.php");
include_once('includes.php');

$Usuario = new Usuario;

$Usuario = $Usuario->listarPorChave($_SESSION['login']);

$perfil = $Usuario->perfil;

Viewer::gerarTopoAdmin();

if ($perfil == "read") {

Viewer::gerarMenuRead();

} else {

Viewer::gerarMenuAdmin();

}

echo '
<div id="conteudo">
 <div class="wrapper">
<h2>SQUID IP: LISTAR</h2>
';

$campos = array('semauthip');

$Semauthip = new Semauthip;
$Semauthip_result = $Semauthip->listar(null, null);

Viewer::gerarTabela($Semauthip, $Semauthip_result, $campos);

echo '
</div>
</div>
';

Viewer::gerarRodape();


