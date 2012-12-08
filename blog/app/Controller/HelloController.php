
<?php
class HelloController extends AppController {

	//action
	// hello/ index
	public function index() {
		$nomeCompleto ="Simone Motta";
		// enviando o conteudo da variavel
		// para a view
		$this->set('nome', $nomeCompleto);
		
	}
	public function contact() {

	}

	public function about_me() {

	}

}
