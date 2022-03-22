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

$Blk = new Blk;


if($_GET['blk_id'] && $_GET['ok']) {

  if ($Blk->excluir($_GET['blk_id'])) {
   echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID IP: EXCLUIDO</h2>
				<p class="sucesso" style="margin:auto;">URL excluida com sucesso</p>
				<br></br>
				<a href="tblkListar.php" class="bt-acoes bt-acoes-sucesso">Voltar à listagem</a>
				</div>
				</div>';   
				
  } else {
    echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID IP: EXCLUIR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi excluido</p>
				<br></br>
				<a href="tblkListar.php" class="bt-acoes bt-acoes-sucesso">Voltar à listagem</a>
				</div>
				</div>';  
  }


} else {

  $Blk = $Blk->listarPorChave($_GET['blk_id']);

  echo '<div id="conteudo">
		<div class="wrapper">
		<h2>SQUID IP: EXCLUIR</h2>
		<div class="box-excluir">
      	<h3>Confirma exclusão do IP?</h3>
      	<h4>' . $Blk->blk . '</h4>
      	<a href="tblkListar.php" class="bt-excluir-nao" style="margin-left:60px;">NÃO</a>
      	<a href="tblkExcluir.php?blk_id=' . $Blk->blk_id .'&ok=1" class="bt-excluir-sim">SIM</a>
		</div>
		</div>
		</div>'; 

} // fim if
}
Viewer::gerarRodape();