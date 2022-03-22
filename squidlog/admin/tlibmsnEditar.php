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

$Libmsn = new Libmsn;

if($_POST['libmsn_id']) {

  if ($Libmsn->atualizar($_POST['libmsn_id'], $_POST)) {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID IP: EDITADO</h2>
				<p class="sucesso" style="margin:auto;">Registro foi editado com sucesso</p>
				<br></br>
				<a href="tlibmsnListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  } else {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID IP: EDITAR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi editado</p>
				<br></br>
				<a href="tlibmsnListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  }


} else {

  $Libmsn = $Libmsn->listarPorChave($_GET['libmsn_id']);

  echo '<div id="conteudo">
		  <div class="wrapper">
		  <h2>SQUID IP: EDITAR</h2>
		  <p>Digite no campo abaixo o IP que deseja alterar:</p>
  		  <form action="tlibmsnEditar.php" method="post">
        <input type="hidden" name="libmsn_id" value="' . $Libmsn->libmsn_id . '">
        <input type="text" name="libmsn" value="' . $Libmsn->libmsn . '" class="form-dados-inserir" maxlength="256">
        <button type="submit"  class="bt-acoes bt-acoes-posicao">Salvar Registro</button>
   	  <div class="clear"></div>
	  </form> 
	  </div>
	  </div>';  

} // fim if
}