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

if($_POST['lib']) {

	$Lib = new Lib;
	$filtro= "lib = '" . $_POST['lib'] ."'";
	$resultado = $Lib->listar($filtro);
		if($resultado->num_rows){
	    echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>SQUID IP: INSERIR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro ja existe</p>
				<br></br>
				<a href="tlibListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  

	}
	else {
    $input = $_POST['lib'];
    if (preg_match( "/^((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){3}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})|\/\[0-9\]{1,2}?$/", $input)) 
    {
        if ($Lib->inserir($_POST)) {
			echo '<div id="conteudo">
					<div class="wrapper">
					<h2>SQUID IP: INSERIDO</h2>
					<p class="sucesso" style="margin:auto;">IP inserido com sucesso</p>
					<br></br>
					<a href="tlibListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
					</div>
					</div>';   
				
		} else {
			echo '<div id="conteudo">
					<div class="wrapper">
					<h2>SQUID IP: INSERIR</h2>
					<p class="erro" style="margin:auto;">ERRO!! Registro não foi salvo</p>
					<br></br>
					<a href="tlibListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
					</div>
					</div>';  
			}
    }else
    {
       			echo '<div id="conteudo">
					<div class="wrapper">
					<h2>SQUID IP: INSERIR</h2>
					<p class="erro" style="margin:auto;">ERRO!! O IP não é valido</p>
					<br></br>
					<a href="tlibListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
					</div>
					</div>';  
    }
  }
} else {
 echo '<div id="conteudo">
        <div class="wrapper">
      		<h2>SQUID IP: INSERIR</h2>
            <p>Digite no campo abaixo o IP que deseja liberar:</p>
            <form method="post" action="tlibInserir.php" >
             <input type="text" name="lib" value="" class="form-dados-inserir" maxlength="256"/>
             <button class="bt-acoes bt-acoes-posicao" type="submit">Salvar</button>
             <div class="clear"></div>
            </form>
        </div>
        </div>';      

} // fim if
}
Viewer::gerarRodape();
