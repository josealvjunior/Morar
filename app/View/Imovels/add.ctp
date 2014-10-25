<?php echo $this->Form->create('Imovel',array('type' => 'file'));?>
<label>Imovel</label>
<?php 
	echo $this->Form->file('uploadfile.', array('multiple'));
	echo $this->Form->end('Enviar');
?>
