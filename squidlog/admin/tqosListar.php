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
<h2>QOS: LISTAR</h2>
';

$campos = array('address', 'download', 'upload');

$Qos = new Qos;
$Qos_result = $Qos->listar(null, null);

Viewer::gerarTabela($Qos, $Qos_result, $campos);

echo '
</div>
</div>
';

Viewer::gerarRodape();


