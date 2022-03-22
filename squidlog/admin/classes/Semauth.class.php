<?php
class Semauth extends Tabela {
  protected $tabela = 'tsemauth';
  protected $chavePrimaria = 'semauth_id';
  protected $campos = array('semauth_id', 'semauth');
  public $legendas = array(
											    'semauth_id'=>'CODIGO',
											    'semauth'=>'URL',
											    );

  public $formtype = array(
											    //'semauth_id'=>'inputtext',
											    'semauth'=>'inputtext',
											     );
 }
