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
<h2>USERS: LISTAR</h2>
';

$campos = array('login', 'nome', 'perfil');

$Usuario = new Usuario;
$Usuario_result = $Usuario->listar(null, null);

Viewer::gerarTabela($Usuario, $Usuario_result, $campos);

echo '
</div>
</div>
';

Viewer::gerarRodape();


