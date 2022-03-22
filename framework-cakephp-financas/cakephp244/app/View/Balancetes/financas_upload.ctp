<?php echo $this->element('menu'); ?>
<?php
echo '<div id="conteudo">
<div class="wrapper">
<h2>Importar Extrato:</h2>
<form enctype="multipart/form-data" action="/financas/balancetes/upload" method="post">
<input name="arquivo" type="file">
<input type="submit" value="Enviar Arquivo">
</form>
</div>
</div>';	
?>
