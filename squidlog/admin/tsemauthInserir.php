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

if($_POST['semauth']) {

	$Semauth = new Semauth;
	$filtro= "semauth = '" . $_POST['semauth'] ."'";
	$resultado = $Semauth->listar($filtro);
		if($resultado->num_rows){
	    echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID SITE: INSERIR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro ja existe</p>
				<br></br>
				<a href="tsemauthListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  

	}
	else {
         if ($Semauth->inserir($_POST)) {
			echo '<div id="conteudo">
					<div class="wrapper">
					<h2>SQUID SITE: INSERIDA</h2>
					<p class="sucesso" style="margin:auto;">URL inserida com sucesso</p>
					<br></br>
					<a href="tsemauthListar.php" class="bt-acoes bt-acoes-sucesso">Voltar à index</a>
					</div>
					</div>';   
				
		} else {
			echo '<div id="conteudo">
					<div class="wrapper">
					<h2>SQUID SITE: INSERIR</h2>
					<p class="erro" style="margin:auto;">ERRO!! Registro não foi salvo</p>
					<br></br>
					<a href="tsemauthListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
					</div>
					</div>';  
			}
    }
  }
 else {
 echo '<div id="conteudo">
        <div class="wrapper">
      		<h2>SQUID SITE: INSERIR</h2>
            <p>Digite no campo abaixo a URL que deseja que não tenha autenticacao:</p>
            <form method="post" action="tsemauthInserir.php" >
             <input type="text" name="semauth" value="" class="form-dados-inserir" maxlength="256"/>
             <button class="bt-acoes bt-acoes-posicao" type="submit">Salvar</button>
             <div class="clear"></div>
            </form>
        </div>
        </div>';      

} // fim if
}
Viewer::gerarRodape();
