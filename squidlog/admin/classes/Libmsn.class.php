<?php
class Libmsn extends Tabela {
  protected $tabela = 'tlibmsn';
  protected $chavePrimaria = 'libmsn_id';
  protected $campos = array('libmsn_id', 'libmsn');
  public $legendas = array(
											    'libmsn_id'=>'CODIGO',
											    'libmsn'=>'IP',
											    );

  public $formtype = array(
											    //'libmsn_id'=>'inputtext',
											    'libmsn'=>'inputtext',
											     );
 }
