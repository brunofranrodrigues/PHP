<?php
class Semauthip extends Tabela {
  protected $tabela = 'tsemauthip';
  protected $chavePrimaria = 'semauthip_id';
  protected $campos = array('semauthip_id', 'semauthip');
  public $legendas = array(
											    'semauthip_id'=>'CODIGO',
											    'semauthip'=>'IP',
											    );

  public $formtype = array(
											    //'semauthip_id'=>'inputtext',
											    'semauthip'=>'inputtext',
											     );
 }
