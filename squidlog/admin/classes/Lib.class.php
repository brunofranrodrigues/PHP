<?php
class Lib extends Tabela {
  protected $tabela = 'tlib';
  protected $chavePrimaria = 'lib_id';
  protected $campos = array('lib_id', 'lib');
  public $legendas = array(
											    'lib_id'=>'CODIGO',
											    'lib'=>'IP',
											    );

  public $formtype = array(
											    //'lib_id'=>'inputtext',
											    'lib'=>'inputtext',
											     );
 }
