<?php
include_once("checaSessao.php");
include_once('includes.php');

$Usuario = new Usuario;

$Usuario = $Usuario->listarPorChave($_SESSION['login']);

$perfil = $Usuario->perfil;

Viewer::gerarTopoAdmin();

if ($perfil == "read") {

Viewer::gerarMenuRead();

Viewer::gerarConteudo();

} else {

Viewer::gerarMenuAdmin();
	
$DUMPFILES = shell_exec('sudo /var/www/admin/scripts/mysql-dump.sh');
$DUMPFILES;

 echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SALVAR CONFIG: </h2>
				<p class="sucesso" style="margin:auto;">TODOS OS REGISTROS FORAM SALVOS COM SUCESSO</p>
				<br></br>
				<a href="index.php" class="bt-acoes bt-acoes-sucesso">Voltar à index</a>
				</div>
				</div>';   

}

Viewer::gerarRodape();
