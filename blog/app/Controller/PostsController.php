<?php

class PostsController extends AppController {

    public $helpers = array('Html','Form');
    public $components = array("Session");
   
    // action
    // /posts/index
    public function index() {
        $todasAsPostagens = $this->Post->find('all');

     // jogar pra view
        $this -> set('posts', $todasAsPostagens);
    }
    public function view($id = null){

    	// setar o Post com id == 3
    	$this->Post->id = $id;

    	//prucurar no banco o item com id 3
    	$p = $this->Post->read();

    	//enviando para a view os campos de itens
    	$this->set('post', $p);
    }
    # /post/add
    public function add(){
    	# se for enviado um Post pegar dados de fora e salvar no banco
    	  if ($this->request->is('post')) {
    	  	
            $dadosDoFormulario = $this->request->data;
            # tentar salvar os dados no banco
            # se ele conseguir salvar, mostrar MSG e REDIRECIONAR para o index
            if($this->Post->save($dadosDoFormulario)){
            	#mostrar MSG
            	$this->Session->setFlash('A postagem foi inserida com sucesso.');
            	#redirecionar para o index
                $this->redirect(array('action' => 'index'));
            }    
        }
    }

    function edit($id = null) {
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }else {
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
            }
        }
    }
}