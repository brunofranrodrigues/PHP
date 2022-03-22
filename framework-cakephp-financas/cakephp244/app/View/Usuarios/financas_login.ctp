<?php
echo '<div id="login">';
echo $this->Session->flash();
echo $this->Session->flash('auth');
echo $this->Form->create('Usuario'); 
echo $this->Form->input('email'); 
echo $this->Form->input('senha', array('type' => 'password'));
echo $this->Form->end('Entrar');
echo '</div>';
?>

