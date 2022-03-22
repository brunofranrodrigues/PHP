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

$Qos = new Qos;

if($_POST['qos_id']) {

  if ($Qos->atualizar($_POST['qos_id'], $_POST)) {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>QOS: EDITADO</h2>
				<p class="sucesso" style="margin:auto;">Registro foi editado com sucesso</p>
				<br></br>
				<a href="tqosListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  } else {
     echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>QOS: EDITAR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi editado</p>
				<br></br>
				<a href="tqosListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  }


} else {

  $Qos = $Qos->listarPorChave($_GET['qos_id']); 
	  echo '<div id="conteudo">
        <div class="wrapper">
      		<h2>QOS: EDITAR</h2>
            <p>Digite nos campos abaixo o IP, a taxa de download e a taxa de upload:</p>
            <form method="post" action="tqosEditar.php" >
			<label for="adress" class="label-qos form-dados-inserir-qos">IP</label>
			<label for="adress" class="label-qos2 form-dados-inserir-qos2">Download</label>
			<label for="adress" class="label-qos2 form-dados-inserir-qos2">Upload</label>
			<input type="hidden" name="qos_id" value="' . $Qos->qos_id . '">
            <input type="text" name="address" id="address" class="form-dados-inserir form-dados-inserir-qos" maxlength="20" value="' . $Qos->address . '"/>
			<input type="text" name="download" id="download" class="form-dados-inserir form-dados-inserir-qos2" maxlength="5" value="' . $Qos->download . '"/>
			<input type="text" name="upload" id="upload" class="form-dados-inserir form-dados-inserir-qos2" maxlength="5" value="' . $Qos->upload . '"/>
            <button class="bt-acoes bt-acoes-posicao bt-acoes-posicao-qos" type="submit">Salvar</button>
            <div class="clear"></div>
           </form>
        </div>
        </div>';      

} // fim if
}