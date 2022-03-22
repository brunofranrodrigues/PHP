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

$Sitesblk = new Sitesblk;


if($_GET['sitesblk_id'] && $_GET['ok']) {

  if ($Sitesblk->excluir($_GET['sitesblk_id'])) {
   echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID SITE: EXCLUIDO</h2>
				<p class="sucesso" style="margin:auto;">URL excluida com sucesso</p>
				<br></br>
				<a href="tsitesblkListar.php" class="bt-acoes bt-acoes-sucesso">Voltar para Lista</a>
				</div>
				</div>';   
				
  } else {
    echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID SITE: EXCLUIR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi excluido</p>
				<br></br>
				<a href="tsitesblkListar.php" class="bt-acoes bt-acoes-sucesso">Voltar para Lista</a>
				</div>
				</div>';  
  }


} else {

  $Sitesblk = $Sitesblk->listarPorChave($_GET['sitesblk_id']);

 echo '<div id="conteudo">
		<div class="wrapper">
		<h2>SQUID SITE: EXCLUIR</h2>
		<div class="box-excluir">
      <h3>Confirma exclusão da URL?</h3>
      <h4>' . $Sitesblk->sitesblk . '</h4>
      <a href="tsitesblkListar.php" class="bt-excluir-nao" style="margin-left:60px;">NÃO</a>
      <a href="tsitesblkExcluir.php?sitesblk_id=' . $Sitesblk->sitesblk_id .'&ok=1" class="bt-excluir-sim">SIM</a>
	  </div>
		</div>
		</div>'; 

} // fim if
}
Viewer::gerarRodape();
