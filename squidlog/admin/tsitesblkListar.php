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
<h2>SQUID SITE: LISTAR</h2>
';

$campos = array('sitesblk');

$Sitesblk = new Sitesblk;
$Sitesblk_result = $Sitesblk->listar(null, null);

Viewer::gerarTabela($Sitesblk, $Sitesblk_result, $campos);

echo '
</div>
</div>
';

Viewer::gerarRodape();


