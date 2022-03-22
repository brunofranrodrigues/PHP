<?php

abstract class Campo {
  public $name;
  protected $type = 'text';
  public $formtype = 'inputtext';
  public $value = '';
  public $label = '';

  public function __construct($name,$label) {
    $this->name = $name;
    $this->label = $label;
  }

  public function definirType($type) {
    $this->type = $type;
  }

  public function definirValue($value) {
    $this->value = $value;
  }


  public function exibirCampo() {

    $conteudo = '
  <label for="' . $this->name . '">' . $this->label . '</label>
  <input id="' . $this->name . '" name="' . $this->name . '" type="' . $this->type . '" value="' . $this->value . '" />
  <br/>
';
    return $conteudo;

  }

}
