<?php

class ProductsController extends AppController {

    public $helpers = array('Html','Form');
  
    public $components = array("Session");
   
    //action
    public function index() {
        $todosOsProdutos = $this->Product->find('all');

     // jogar pra view
        $this -> set('products', $todosOsProdutos);
    }
    public function view($id = null){

    	// setar o Post com id == 3
    	$this->Product->id = $id;

    	//prucurar no banco o item com id 3
    	$p = $this->Product->read();

    	//enviando para a view os campos de itens
    	$this->set('product', $p);
    }
    # /post/add
    public function add(){
    	# se for enviado um Post pegar dados de fora e salvar no banco
    	  if ($this->request->is('post')) {
    	  	
            $dadosDoFormulario = $this->request->data;
            # tentar salvar os dados no banco
            # se ele conseguir salvar, mostrar MSG e REDIRECIONAR para o index
            if($this->Product->save($dadosDoFormulario)){
            	#mostrar MSG
            	$this->Session->setFlash('O produto foi inserido com sucesso.');
            	#redirecionar para o index
                $this->redirect(array('action' => 'index'));
            }    
        }
    }

    function edit($id = null) {
        $this->Product->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Product->read();
        } else {
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash('Seu produto foi editado.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }else {
        if ($this->Product->delete($id)) {
            $this->Session->setFlash('O produto com códido: ' . $id . ' foi deletado.');
            $this->redirect(array('action' => 'index'));
            }
        }
    }
}
