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

if(($_POST['login']) AND ($_POST['nome']) AND ($_POST['senha'])) {

$_POST['senha'] = md5($_POST['senha']);

	$Usuario = new Usuario;
  if ($Usuario->inserir($_POST)) {
    echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>USERS: INSERIDO</h2>
				<p class="sucesso" style="margin:auto;">Usuario inserido com sucesso</p>	
				<br></br>
				<a href="tuserssysListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';   
				
  } else {
    echo '<div id="conteudo">
			   <div class="wrapper">
				<h2>USERS: INSERIR</h2>
				<p class="erro" style="margin:auto;">ERRO!! Registro não foi salvo</p>
				<br></br>
				<a href="tuserssysListar.php" class="bt-acoes bt-acoes-sucesso">Ver Lista</a>
				</div>
				</div>';  
  }


} else {
 echo '<div id="conteudo">
        <div class="wrapper">
      		<h2>USERS: INSERIR</h2>
            <p>Digite nos campos abaixo o login o nome e a senha:</p>
            <form method="post" action="tuserssysInserir.php" style="width:450px;">
			<label for="login" class="label-user">Login</label>
			<input type="text" name="login" value="" class="form-dados-inserir form-dados-inserir-user" maxlength="256"/>
			
			<label for="nome" class="label-user">Nome</label>
			<input type="text" name="nome" value="" class="form-dados-inserir form-dados-inserir-user" maxlength="256"/>
			
			<label for="senha" class="label-user">Senha</label>
             <input type="password" name="senha" value="" class="form-dados-inserir form-dados-inserir-user" maxlength="256"/>
			 
			 <label for="perfil" class="label-user">Perfil</label>
			 <select name="perfil" class="form-dados-inserir form-dados-inserir-user">
  				<option value="admin">Administrador</option>
  				<option value="read">Operador</option>
			</select>
			
             <button class="bt-acoes bt-acoes-posicao bt-acoes-posicao-user" type="submit">Salvar</button>
             <div class="clear"></div>
            </form>
        </div>
        </div>';      

} // fim if
}
Viewer::gerarRodape();
