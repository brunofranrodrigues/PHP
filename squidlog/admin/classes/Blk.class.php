<?php
class Blk extends Tabela {
  protected $tabela = 'tblk';
  protected $chavePrimaria = 'blk_id';
  protected $campos = array('blk_id', 'blk');
  public $legendas = array(
											    'blk_id'=>'CODIGO',
											    'blk'=>'IP',
											    );

  public $formtype = array(
											    //'blk_id'=>'inputtext',
											    'blk'=>'inputtext',
											     );
 }
