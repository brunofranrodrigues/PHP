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


if($_GET['qos_id'] && $_GET['ok']) {

  if ($Qos->excluir($_GET['qos_id'])) {
   echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>QOS: EXCLUIDO</h2>
				<p class="sucesso" style="margin:auto;">IP excluído com sucesso</p>
				<br></br>
				<a href="tqosListar.php" class="bt-acoes bt-acoes-sucesso" >Voltar à listagem</a>
				</div>
				</div>';   
				
  } else {
    echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>QOS: EXCLUIDO</h2>
				<p class="erro" style="margin:auto;">ERRO!! IP não foi excluido</p>
				<br></br>
				<a href="tqosListar.php" class="bt-acoes bt-acoes-sucesso">Voltar à listagem</a>
				</div>
				</div>';  
  }


} else {

  $Qos = $Qos->listarPorChave($_GET['qos_id']);

  echo '<div id="conteudo">
		<div class="wrapper">
		<h2>QOS: EXCLUIR</h2>
		<div class="box-excluir">
      	<h3>Confirma exclusão do IP?</h3>
      	<h4>' . $Qos->address . '</h4>
      	<a href="tqosListar.php" class="bt-excluir-nao" style="margin-left:60px;">NÃO</a>
      	<a href="tqosExcluir.php?qos_id=' . $Qos->qos_id .'&ok=1" class="bt-excluir-sim">SIM</a>
		</div>
		</div>
		</div>'; 

} // fim if
}
Viewer::gerarRodape();
