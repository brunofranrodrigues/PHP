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

$Semauth = new Semauth;

if($_POST['semauth_id']) {

  if ($Semauth->atualizar($_POST['semauth_id'], $_POST)) {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID SITE: EDITADO</h2>
				<p class="sucesso" style="margin:auto;">Registro foi editado com sucesso</p>
				<br></br>
				<a href="tsemauthListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  } else {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID SITE: EDITAR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi editado</p>
				<br></br>
				<a href="tsemauthListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  }


} else {

  $Semauth = $Semauth->listarPorChave($_GET['semauth_id']);

  echo '<div id="conteudo">
		  <div class="wrapper">
		  <h2>SQUID SITE: EDITAR</h2>
		  <p>Digite no campo abaixo a URL que deseja alterar:</p>
  		  <form action="tsemauthEditar.php" method="post">
        <input type="hidden" name="semauth_id" value="' . $Semauth->semauth_id . '">
        <input type="text" name="semauth" value="' . $Semauth->semauth . '" class="form-dados-inserir" maxlength="256">
        <button type="submit"  class="bt-acoes bt-acoes-posicao">Salvar Registro</button>
   	  <div class="clear"></div>
	  </form> 
	  </div>
	  </div>';  

} // fim if
}