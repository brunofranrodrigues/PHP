<?php
class Qos extends Tabela {
  protected $tabela = 'tqos';
  protected $chavePrimaria = 'qos_id';
  protected $campos = array('qos_id', 'address', 'download','upload');
  public $legendas = array(
											    'qos_id'=>'CODIGO',
											    'address'=>'IP',
												'download'=>'DOWNLOAD',
												'upload'=>'UPLOAD',
											    );

  public $formtype = array(
											    //'qos_id'=>'inputtext',
											    'address'=>'inputtext',
												'download'=>'inputtext',
												'upload'=>'inputtext',
											     );
 }
