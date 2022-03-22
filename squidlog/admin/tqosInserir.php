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

if(($_POST['address']) && ($_POST['download']) && ($_POST['upload'])) {

	$Qos = new Qos;
	$filtro= "address = '" . $_POST['address'] ."' AND download = '" . $_POST['download'] ."' AND download = '" . $_POST['download'] ."'";
	$resultado = $Qos->listar($filtro);
		if($resultado->num_rows){
	    echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>QOS: INSERIR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro ja existe</p>
				<br></br>
				<a href="tqosListar.php" class="bt-acoes bt-acoes-sucesso">Voltar à index</a>
				</div>
				</div>';  

	}
	else {
	 $input = $_POST['address'];
    if (preg_match( "/^((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){3}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})|\/\[0-9\]{1,2}?$/", $input)) 
    {
  if ($Qos->inserir($_POST)) {
    echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>QOS: INSERIDO</h2>
				<p class="sucesso" style="margin:auto;">URL inserida com sucesso</p> 
				<br></br>
				<a href="tqosListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';   
				
	}else {
		echo '<div id="conteudo">
				<div class="wrapper">
				<h2>QOS: INSERIR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi salvo</p>
				<br></br>
				<a href="tqosListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
	}
    }else
    {
       			echo '<div id="conteudo">
					<div class="wrapper">
					<h2>SQUID IP: INSERIR</h2>
					<p class="erro" style="margin:auto;">ERRO!! O IP nao e valido</p>
					<br></br>
					<a href="tlibListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
					</div>
					</div>';  
    }
  }
} else {
 echo '<div id="conteudo">
        <div class="wrapper">
      		<h2>QOS: INSERIR</h2>
            <p>Digite nos campos abaixo o IP, a taxa de download em KB e a taxa de upload em KB:</p>
            <form method="post" action="tqosInserir.php" >
			<label for="adress" class="label-qos form-dados-inserir-qos">IP</label>
			<label for="adress" class="label-qos2 form-dados-inserir-qos2">Download</label>
			<label for="adress" class="label-qos2 form-dados-inserir-qos2">Upload</label>
             <input type="text" name="address" id="address" value="" class="form-dados-inserir form-dados-inserir-qos" maxlength="20"/>
			 <input type="text" name="download" id="download" value="" class="form-dados-inserir form-dados-inserir-qos2" maxlength="5"/>
			 <input type="text" name="upload" id="upload" value="" class="form-dados-inserir form-dados-inserir-qos2" maxlength="5"/>
             <button class="bt-acoes bt-acoes-posicao bt-acoes-posicao-qos" type="submit">Salvar</button>
             <div class="clear"></div>
            </form>
        </div>
        </div>';      

} // fim if
}
Viewer::gerarRodape();
