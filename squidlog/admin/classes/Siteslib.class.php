<?php
class Siteslib extends Tabela {
  protected $tabela = 'tsiteslib';
  protected $chavePrimaria = 'siteslib_id';
  protected $campos = array('siteslib_id', 'siteslib');
  public $legendas = array(
											    'siteslib_id'=>'CODIGO',
											    'siteslib'=>'URL',
											    );

  public $formtype = array(
											    //'siteslib_id'=>'inputtext',
											    'siteslib'=>'inputtext',
											     );
 }
