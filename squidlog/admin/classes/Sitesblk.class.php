<?php
class Sitesblk extends Tabela {
  protected $tabela = 'tsitesblk';
  protected $chavePrimaria = 'sitesblk_id';
  protected $campos = array('sitesblk_id', 'sitesblk');
  public $legendas = array(
											    'sitesblk_id'=>'CODIGO',
											    'sitesblk'=>'URL',
											    );

  public $formtype = array(
											    //'sitesblk_id'=>'inputtext',
											    'sitesblk'=>'inputtext',
											     );
 }
