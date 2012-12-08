<h1> Adicionando Produtos</h1>
<?php
#criando o formulario através do ajudante Form
echo $this->Form->create('Product');

#gerando os inputs através do ajudante Form
echo $this->Form->input('name');
echo $this->Form->input('weight');
echo $this->Form->input('valid');


#fechando o formulario e gerando o batão submit
echo $this->Form->end("Enviar");