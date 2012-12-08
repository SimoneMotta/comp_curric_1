<h1>Editando um Produto</h1>
<?php
    echo $this->Form->create('Product', array('action' => 'edit'));
    echo $this->Form->input('name');
    echo $this->Form->input('weight');
    echo $this->Form->input('valid', array('rows' => '3'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Product');