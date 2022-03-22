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

if($_POST['sitesblk_id']) {

  if ($Sitesblk->atualizar($_POST['sitesblk_id'], $_POST)) {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID SITE: EDITADO</h2>
				<p class="sucesso" style="margin:auto;">Registro foi editado com sucesso</p>
				<br></br>
				<a href="tsitesblkListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  } else {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID SITE: EDITAR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi editado</p>
				<br></br>
				<a href="tsitesblkListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  }


} else {

  $Sitesblk = $Sitesblk->listarPorChave($_GET['sitesblk_id']);

  echo '<div id="conteudo">
		  <div class="wrapper">
		  <h2>SQUID SITE: EDITAR</h2>
		  <p>Digite no campo abaixo a URL que deseja alterar:</p>
  		  <form action="tsitesblkEditar.php" method="post">        
        <input type="hidden" name="siteslib_id" value="' . $Siteslib->siteslib_id . '">
        <input type="text" name="sitesblk" value="' . $Sitesblk->sitesblk . '" class="form-dados-inserir" maxlength="256">
        <button type="submit" class="bt-acoes bt-acoes-posicao">Salvar Registro</button>
   	  <div class="clear"></div>
	  </form> 
	  </div>
	  </div>';  

} // fim if
}