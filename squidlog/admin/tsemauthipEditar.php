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

$Semauthip = new Semauthip;

if($_POST['semauthip_id']) {

  if ($Semauthip->atualizar($_POST['semauthip_id'], $_POST)) {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID IP: EDITADO</h2>
				<p class="sucesso" style="margin:auto;">Registro foi editado com sucesso</p>
				<br></br>
				<a href="tsemauthipListar.php" class="bt-acoes bt-acoes-sucesso">Ver Listax</a>
				</div>
				</div>';  
  } else {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID IP: EDITAR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi editado</p>
				<br></br>
				<a href="tsemauthipListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  }


} else {

  $Semauthip = $Semauthip->listarPorChave($_GET['semauthip_id']);

  echo '<div id="conteudo">
		  <div class="wrapper">
		  <h2>SQUID IP: EDITAR</h2>
		  <p>Digite no campo abaixo o IP que deseja alterar:</p>
  		  <form action="tsemauthipEditar.php" method="post">
        <input type="hidden" name="semauthip_id" value="' . $Semauthip->semauthip_id . '">
        <input type="text" name="semauthip" value="' . $Semauthip->semauthip . '" class="form-dados-inserir" maxlength="256">
        <button type="submit"  class="bt-acoes bt-acoes-posicao">Salvar Registro</button>
   	  <div class="clear"></div>
	  </form> 
	  </div>
	  </div>';  

} // fim if
}