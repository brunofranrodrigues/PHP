<?php

class Viewer {

  static function gerarTopo () {  

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="lib/css/base.css" rel="stylesheet" type="text/css" />
<link href="lib/css/geral.css" rel="stylesheet" type="text/css" />
 
<title>GETSITE</title>
</head>

<body>


<div id="wrap">
      <div id="topo">
      <div class="wrapper">
      		<h1>Logo do Cliente</h1>
            <div id="dados-login-topo">
            
            </div>
      </div>
      </div>
';
  }

static function gerarTopoAdmin () {  

    echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="lib/css/base.css" rel="stylesheet" type="text/css" />
<link href="lib/css/geral.css" rel="stylesheet" type="text/css" />
<title>GETSITE</title>

</head>

<body>
<div id="wrap">
      <div id="topo">
      <div class="wrapper">
      		<h1>Logo do Cliente</h1>
            <div id="dados-login-topo">
            	<p>Usuário:<b>' . $_SESSION['login'] . "</b> | <b>" . $_SESSION['horalogin'] . '</b> | <a href="logout.php" id="logout-link">Logout</a></p>
            </div>
      </div>
      </div>
';
  }

  static function gerarMenuAdmin () {
    echo '      <div id="menu">
      <div class="wrapper">
      	<ul id="mainNav" class="dropdown dropdown-horizontal">
      	<li><a href="#" class="order order-gray"><span>QOS</span></a>
            	<ul> 
					<li><a href="tqosInserir.php">Inserir</a></li> 
					<li><a href="tqosListar.php">Listar</a></li> 
				</ul> 
            </li>
            <li><a href="#" class="order order-gray"><span>SQUID</span></a>
            	<ul> 
					<li><a href="#">Liberacao de SITES</a>
                    	<ul>
                            	<li><a href="tsiteslibInserir.php">Inserir</a></li> 
                                <li><a href="tsiteslibListar.php">Listar</a></li> 
                         </ul>
                    </li> 
					<li><a href="#">Bloqueio de SITES</a>
                    	<ul>
                            	<li><a href="tsitesblkInserir.php">Inserir</a></li> 
                                <li><a href="tsitesblkListar.php">Listar</a></li> 
                         </ul>
                    </li> 
					<li><a href="#">SITES sem autenticacao</a>
                    	<ul>
                            	<li><a href="tsemauthInserir.php">Inserir</a></li> 
                                <li><a href="tsemauthListar.php">Listar</a></li> 
                         </ul>
                    </li> 
                    <li><a href="#">Bloquear acesso a internet</a>
                    	<ul>
                            	<li><a href="tblkInserir.php">Inserir</a></li> 
                                <li><a href="tblkListar.php">Listar</a></li> 
                         </ul>
                    </li>
                    <li><a href="#">Liberar acesso total a internet</a>
                    	<ul>
                            	<li><a href="tlibInserir.php">Inserir</a></li> 
                                <li><a href="tlibListar.php">Listar</a></li> 
                         </ul>
                    </li>
                    <li><a href="#">IPs sem autenticacao</a>
                    	<ul>
                            	<li><a href="tsemauthipInserir.php">Inserir</a></li> 
                                <li><a href="tsemauthipListar.php">Listar</a></li> 
                         </ul>
                    </li>
                    <li><a href="#">Liberar MSN</a>
                    	<ul>
                            	<li><a href="tlibmsnInserir.php">Inserir</a></li> 
                                <li><a href="tlibmsnListar.php">Listar</a></li> 
                         </ul>
                    </li>
                 </ul> 
            </li>
			<li><a href="squid-reports/index.html" class="order order-gray"><span>SARG</span></a></li>
			<li><a href="mrtg/index.html" class="order order-gray"><span>MRTG</span></a></li>
			<li><a href="#" class="order order-gray"><span>USUARIOS</span></a>
            	<ul> 
					<li><a href="tuserssysInserir.php">Inserir</a></li> 
					<li><a href="tuserssysListar.php">Listar</a></li> 
				</ul> 
            </li>
			<li><a href="saveconfig.php" class="order order-white"><span>SALVAR CONFIG</span></a></li>
		  </ul>
      </div>
      </div>
';

  }
  
    static function gerarMenuRead () {
    echo '      <div id="menu">
      <div class="wrapper">
      	<ul id="mainNav" class="dropdown dropdown-horizontal">
      	<li><a href="tqosListar.php" class="order order-gray"><span>QOS</span></a></li>
            <li><a href="index.php" class="order order-gray"><span>SQUID</span></a>
            	<ul> 
					<li><a href="tsiteslibListar.php">Liberacao de SITES</a></li> 
					<li><a href="tsemauthListar.php">SITES sem autenticacao</a></li> 
                    <li><a href="tblkListar.php">Bloquear acesso</a></li>
                    <li><a href="tlibListar.php">Liberar acesso</a></li>
					<li><a href="tsemauthipListar.php">IPs sem autenticacao</a></li>
                    <li><a href="tlibmsnListar.php">Liberar MSN</a></li>
                 </ul> 
            </li>
			<li><a href="squid-reports/index.html" class="order order-gray"><span>SARG</span></a></li>
			<li><a href="mrtg/index.html" class="order order-gray"><span>MRTG</span></a></li>
            </li>
		  </ul>
      </div>
      </div>
';

  }
   static function gerarConteudo () {
  echo ' <div id="conteudo">
   <div class="wrapper">
   		<h2>Seja Bem-vindo!</h2>
         <p class="texto-home">Use uma das opções do menu acima para interagir com o sistema.</p>
         <p><em>Se você tiver algum problema ou dúvida entre em contato com o administrador do sistema, através do email <a href="mailto:eduardo@getsite.com.br">eduardo@getsite.com.br</a>.</em></p>
             
   </div>
   </div>';      
  }

  static function gerarTabela($tabObj, $tabResult, $campos=null) {
 	
 	$url = $_SERVER["PHP_SELF"];
	if ($url == "/admin/tuserssysListar.php"){
    
    $conteudo = '
  <table border="1" width="600">
    <tr>
      <th >AÇÕES</th>
';


    if ($campos) {
      foreach ($campos as $campo) {       
    $conteudo .= '
      <th>' . $tabObj->legendas[$campo] . '</th>
';
        }
    } else {
      foreach ($tabObj->legendas as $campo) {
    $conteudo .= '
      <th>' . $campo . '</th>
';
        }
    }

    $conteudo .= '
    </tr>
';


    while ($tabLinha = $tabResult->fetch_array(MYSQLI_ASSOC)) {
       $conteudo .= '
    <tr>
      <td class="teste1">
            <a href="' . $tabObj->pegarNomeTabela() .  'Excluir.php?' . $tabObj->pegarChave() . "=" . $tabLinha[$tabObj->pegarChave()] . '">
            <img src="lib/imagens/excluir.png" alt="excluir" title="Excluir"></a>
      </td>
';
    if ($campos) {
      foreach ($campos as $campo) {       
         $conteudo .= '
      <td>' . $tabLinha[$campo] . '</td>
';
      }
    } else {
      foreach ($tabLinha as $campo => $valor) {
        $conteudo .= '
      <td>' . $valor. '</td>
';
      }
    }
      $conteudo .= '
    </tr>
';
    }
    $conteudo .= '
  </table>
';
    echo $conteudo;
  }	
	
	else {
	   
    $conteudo = '
  <table border="1" width="600">
    <tr>
      <th >AÇÕES</th>
';


    if ($campos) {
      foreach ($campos as $campo) {       
    $conteudo .= '
      <th>' . $tabObj->legendas[$campo] . '</th>
';
        }
    } else {
      foreach ($tabObj->legendas as $campo) {
    $conteudo .= '
      <th>' . $campo . '</th>
';
        }
    }

    $conteudo .= '
    </tr>
';


    while ($tabLinha = $tabResult->fetch_array(MYSQLI_ASSOC)) {
       $conteudo .= '
    <tr>
      <td class="teste1">
        <a href="' . $tabObj->pegarNomeTabela() .  'Editar.php?' . $tabObj->pegarChave() . "=" . $tabLinha[$tabObj->pegarChave()] . '">
            <img src="lib/imagens/editar.png" alt="editar" title="Editar"></a>
        <a href="' . $tabObj->pegarNomeTabela() .  'Excluir.php?' . $tabObj->pegarChave() . "=" . $tabLinha[$tabObj->pegarChave()] . '">
            <img src="lib/imagens/excluir.png" alt="excluir" title="Excluir"></a>
      </td>
';
    if ($campos) {
      foreach ($campos as $campo) {       
         $conteudo .= '
      <td>' . $tabLinha[$campo] . '</td>
';
      }
    } else {
      foreach ($tabLinha as $campo => $valor) {
        $conteudo .= '
      <td>' . $valor. '</td>
';
      }
    }
      $conteudo .= '
    </tr>
';
    }
    $conteudo .= '
  </table>
';
    echo $conteudo;
  }
  
 }  
    static function gerarRodape () {  
    //global $debug;

    $login = '';

    echo '<div id="rodape">
      <div class="wrapper">
      		<p>Versão 1.0</p>
      </div>
      </div>
      ' . $login . '
</div>
</body>
</html>      
';
    //include_once('../debug.php');
  }

} // class Viewer
