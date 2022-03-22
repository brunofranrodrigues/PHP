<?php
/*
Classe Abstrata Tabela
*/
abstract class Tabela {

  // conexao sera compartilhada entre todas as instâncias 
  static $conexao;

  // nome da tabela
  protected $tabela;

  // chave primária da tabela
  protected $chavePrimaria;

  // Array com lista de campos da tabela
  protected $campos = array();

  // Array com lista de campo=>legenda
  protected $legendas = array();

  // Array com lista de campo=>tipo
  public $formtype = array();

  // Array com chaves estrangeiras
  public $fk = array();

  /*
   * Método construtor
   * Se conexão não existir, cria, senão, nada a fazer (reutiliza a criada por outra
   * instância da classe Tabela
   */
  function __construct() {
    global $bdconfig;
    if (!$this->conexao) $this->conexao = new mysqli($bdconfig['servidor'], 
                                                     $bdconfig['usuario'], 
                                                     $bdconfig['senha'], 
                                                     $bdconfig['banco']);
  } // function __construct


  /*
   * Método execSQL
   * Executa uma consulta através da conexão estabelecida
   * Se o debug estiver ativado (variável $debug=true em config.inc.php exibe SQL
   * Retorna um objeto com o resultado da consulta
   */
	function execSQL($sql)
	{
    global $debugBanco;

    // Executa a consulta através da conexão
    $resultado = $this->conexao->query($sql);

    // Se debug ativado, exibe SQL na tela
//    if ($debugBanco) $GLOBALS['debugBancoSQL'] .= "<pre>$sql</pre><hr>";
    if ($debugBanco) echo "<pre>$sql</pre><hr>";

    // Se resultado existe, retorna resultado
    if ($resultado) {
      return $resultado;
    // Senão, exibe erro do MySQL e aborta script
    } else {
			echo "<hr><pre>$sql</pre><hr>";
      echo $this->conexao->error;
      exit;
    }
  } // function execSQL


  /*
   * Método listarPorChave
   * Executa uma consulta filtrando pela chave primária da tabela
   * Recebe um valor que é um id de um registro
   * Retorna um objeto com o registro
   */
  function listarPorChave ($chave){

    // Monta consulta concatenando tabela, campo que é chave primária e o valor enviado
		$sql = "SELECT * FROM " . $this->tabela . "
            WHERE " . $this->chavePrimaria . " = '$chave'";

    // Executa consulta
		$resultado = $this->execSQL($sql);

    // Retorna objeto com o registro encontrado
    return $resultado->fetch_object();

  } // function listarPorChave


  /*
   * Método listar
   * Executa uma consulta na tabela, podendo:
   * - Recebe (opcionalmente) filtro em formato SQL
   * - Recebe (opcionalmente) ordem em formato SQL 
   * - Recebe (opcionalmente) limite em formato MySQL
   * Retorna um objeto com o resultado da consulta
   */
  function listar ($filtro=null, $ordem=null, $limite=null){

    // Monta consulta concatenando tabela
		$sql = "SELECT * FROM " . $this->tabela;

    // Se foi enviado filtro, concatena filtro
		if (!is_null($filtro)) { $sql .= " WHERE $filtro";}
		
    // Se foi enviado ordem, concatena ordem
		if (!is_null($ordem)){ $sql .= " ORDER BY $ordem";}

    // Se foi enviado limite, concatena limite
		if (!is_null($limite)){ $sql .= " LIMIT $limite";}

    // Retorna objeto com o resultado encontrado
		return $this->execSQL($sql);
    
  } // function listar

   /*
   * Método excluir
   * Exclui um registro filtrando pela chave primária da tabela
   * Recebe um id de um registro
   * Retorna um objeto com o resultado
   */
  function excluir ($chave){
    // Monta consulta concatenando tabela, campo que é chave primária e o valor enviado
		$sql = "DELETE FROM " . $this->tabela . "
            WHERE " . $this->chavePrimaria . " = '$chave'";

    // Retorna objeto com o resultado encontrado
		return $this->execSQL($sql);

  } // function excluir


  /*
   * Método inserir
   * Insere um registro
   * Recebe um array que contém itens no formato $campo => $valor
   * (um $_POST de formulário é uma boa opção
   * Retorna um objeto com o resultado
   */
  function inserir ($dados){
  	
    // Monta consulta concatenando tabela
    $sql = "INSERT INTO " . $this->tabela . " (";

    // Calcula total de campos
		$totalCampos = count($dados);

    // Inicia contador
		$cont = 0;    

    // Varre array $dados e atribui $key => $value
    // com campo e valor
		foreach ($dados as $campo => $valor)
		{

      // concatena o campo para montar a primeira parte do INSERT
			$campos  .= "$campo";

      // concatena o valor para montar a segunda parte do INSERT
			$valores .= "'$valor'";

      // Incrementa contador
			$cont++;

			// Verifica se chegou ao final do array e coloca ou não a vírgula
			if ($cont != $totalCampos)
			{
				$campos .= ",";
				$valores .= ",";
			}
		}

    // Monta o resto da consulta de inserção com campos e valores
    $sql .= $campos . ") VALUES (" . $valores . ")";

    // Retorna objeto com o resultado encontrado
    return $this->execSQL($sql);

  } // function inserir


  /*
   * Método atualizar
   * Atualiza um registro filtrando pela chave primária
   * Recebe um array que contém itens no formato $campo => $valor
   * (um $_POST de formulário é uma boa opção)
   * Recebe um id de um registro
   * Retorna um objeto com o resultado
   */
  function atualizar ($chave, $dados){

    // Monta consulta concatenando tabela
    $sql = "UPDATE " . $this->tabela. " SET ";

    // Calcula total de campos
		$totalCampos = count($dados);

    // Inicia contador
		$cont = 0;    

    // Varre array $dados e atribui $key => $value
    // com campo e valor
		foreach ($dados as $campo => $valor)
		{

      // concatena o campo e valor para montar atualização do campo
			$sql .= "$campo = '$valor'";

      // Incrementa contador
			$cont++;

			// Verifica se chegou ao final do array e coloca ou não a vírgula
			if ($cont != $totalCampos)
			{
				$sql .= ",";
			}
		}

    // Monta restante da condição concatenando campo que é chave primária e o valor enviado
    $sql .= " WHERE " . $this->chavePrimaria . " = '$chave'";

    // Retorna objeto com o resultado encontrado
    return $this->execSQL($sql);

  } // function atualizar


  /*
   * Método pegarChave
   * Necessário porque atributo é protegido
   * Retorna Chave Primária
   */
  function pegarChave (){

    return $this->chavePrimaria;

  } // function pegarChave


  /*
   * Método pegarNomeTabela
   * Necessário porque atributo é protegido
   * Retorna Nome da Tabela
   */
  function pegarNomeTabela (){

    return $this->tabela;

  } // function pegarNomeTabela

  /*
   * Método pegarCampos
   * Necessário porque atributo é protegido
   * Retorna Campos
   */
  function pegarCampos (){

    return $this->campos;

  } // function pegarNomeTabela
  
 } // abstract class Tabela

