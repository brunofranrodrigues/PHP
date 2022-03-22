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

$Usuario = new Usuario;


if($_GET['login'] && $_GET['ok']) {

  if ($Usuario->excluir($_GET['login'])) {
   echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>USERS: EXCLUIDO</h2>
				<p class="sucesso" style="margin:auto;">Usuario excluido com sucesso</p>
				<br></br>
				<a href="tuserssysListar.php" class="bt-acoes bt-acoes-sucesso">Voltar à listagem</a>
				</div>
				</div>';   
				
  } else {
    echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>USERS: EXCLUIR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi excluido</p>
				<br></br>
				<a href="tuserssysListar.php" class="bt-acoes bt-acoes-sucesso">Voltar à listagem</a>
				</div>
				</div>';  
  }


} else {

  $Usuario = $Usuario->listarPorChave($_GET['login']);

 echo '<div id="conteudo">
		<div class="wrapper">
		<h2>USERS: EXCLUIR</h2>
		<div class="box-excluir">
      <h3>Confirma exclusão do Usuario?</h3>
      <h4>' . $Usuario->nome . '</h4>
      <a href="tuserssysListar.php" class="bt-excluir-nao" style="margin-left:60px;">NÃO</a>
      <a href="tuserssysExcluir.php?login=' . $Usuario->login .'&ok=1" class="bt-excluir-sim">SIM</a>
	  </div>
		</div>
		</div>'; 

} // fim if
}
Viewer::gerarRodape();
