<h1> Adicionando Postagens</h1>
<?php
#criando o formulario através do ajudante Form
echo $this->Form->create('Post');

#gerando os inputs através do ajudante Form
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows'=> '3'));

#fechando o formulario e gerando o batão submit
echo $this->Form->end("Enviar");