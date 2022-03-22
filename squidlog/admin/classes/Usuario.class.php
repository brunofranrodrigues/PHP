<?php
class Usuario extends Tabela {
  protected $tabela = 'tuserssys';
  protected $chavePrimaria = 'login';
  protected $campos = array('login', 'nome', 'senha', 'perfil');
  public $legendas = array(
													'login' => 'Login', 
													'nome' => 'Nome', 
													'senha' => 'Senha',
													'perfil' => 'Perfil',
												 );
  public $formtype = array(
													'login' => 'inputtext', 
													'nome' => 'inputtext', 
													'senha' => 'inputpassword',
													'perfil' => 'select', 
												 );
}
 
