<?php

include_once("includes.php");



if(isset($_POST['login'])){

  $usuarios = new Usuario;
  $filtro = "login = '" . $_POST['login'] ."' AND senha = md5('" . $_POST['senha'] . "')";
  $resultado = $usuarios->listar($filtro);
    if($resultado->num_rows) {
    session_start();
    $_SESSION['login']  = $_POST['login']; 
    $_SESSION['horalogin'] = date('d/m/Y H:i');
    header('Location:index.php');    
  } else {
    $erro = '<caption>Usuário ou Senha não conferem</caption>';
  }
}

Viewer::gerarTopo();

echo '
<div id="login">
<form method="post" action="login.php">
  <table>
' . $erro  . '
    <tr>
     <th>Login:</th>
     <td><input type="text" name="login" value="' . $_POST['login'] . '" class="input-login"></td>
    </tr>
    <tr>
      <th>Senha:</th>
      <td><input type="password" name="senha" class="input-login"></td>
    </tr>
    <tr>
      <td colspan=2 align="center">
      <input type="submit" id="submit-login" name="submit" value="Entrar" tabindex="100">
     </td>
    </tr>
    <tr>
  </table>
</form>
</div>';

Viewer::gerarRodape();
