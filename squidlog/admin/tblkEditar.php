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

if($_POST['blk_id']) {

  if ($Blk->atualizar($_POST['blk_id'], $_POST)) {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID IP: EDITADO</h2>
				<p class="sucesso" style="margin:auto;">Registro foi editado com sucesso</p>
				<br></br>
				<a href="tblkListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  } else {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID IP: EDITAR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi editado</p>
				<br></br>
				<a href="tblkListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  }


} else {

  $Blk = $Blk->listarPorChave($_GET['blk_id']);

  echo '<div id="conteudo">
		  <div class="wrapper">
		  <h2>SQUID IP: EDITAR</h2>
  		  <form action="tblkEditar.php" method="post">
    	  <p>Digite no campo abaixo o IP que deseja liberar:</p>
        <input type="hidden" name="blk_id" value="' . $Blk->blk_id . '">
        <input type="text" name="blk" value="' . $Blk->blk . '" class="form-dados-inserir" maxlength="256">
        <button type="submit"  class="bt-acoes bt-acoes-posicao">Salvar Registro</button>
   	  <div class="clear"></div>
	  </form> 
	  </div>
	  </div>';  

} // fim if
}