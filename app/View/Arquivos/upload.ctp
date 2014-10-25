<?php 

echo $this->Form->create('Arquivo', array('type' => 'file' ));
echo $this->Form->file('uploadfile.', array('multiple'));
echo $this->Form->end('Enviar');

?>
