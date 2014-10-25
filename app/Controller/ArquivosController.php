<?php
class ArquivosController extends AppController{

	public $uses = array();

	public $components = array('Paginator', 'Session', 'Upload');

	public function upload(){
		if (!empty($this->request->data)) {
			$this->Upload->upload($this->request->data['Arquivo']['uploadfile']);
		}
	} 
}