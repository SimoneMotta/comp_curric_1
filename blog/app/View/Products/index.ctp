<!-- <pre>
    <?php print_r ($posts);?>
<pre> -->
<div class="page-header">
    <h1> Listando Produtos</h1>
</div>

    <p>                    
        <?php echo $this->Html->link ("Novo Item",
                array('controller'=> 'products', 'action'=>'add'),
                array('class'=>'btn btn-success')); ?>        
    </p>        


    <table class="table table-hover">
        <thead>
            <tr>
               <th>Código</th>
                <th>Nome</th>
                <th>Peso</th>
                <th>Validade</th>
                <th>Atualizado em</th>
                <th>Modificado em</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product):?>
                <tr>


                    <td><?php echo $product{"Product"} {"id"};?></td>
                    <td><?php echo $product{"Product"} {"name"};?></td>
                    <td><?php echo $product{"Product"} {"weight"};?></td>
                    <td><?php echo $product{"Product"} {"valid"};?></td>
                    <td><?php echo $product{"Product"} {"created"};?></td>
                    <td><?php echo $product{"Product"} {"modified"};?></td>

                     <td>
                        <?php echo $this->Html->link("Visualizar",
                                array('controller'=>'products','action'=>'view',
                                $product["Product"]["id"]),
                                array('class'=> 'btn btn-success'));?>

                        <?php echo $this->Html->link("Editar",
                                array('controller'=>'products','action'=>'edit',
                                $product["Product"]["id"]),
                                array('class'=> 'btn btn-info')); ?>

                        <div class = "btn btn-danger">
                            <?php echo $this->Form->postLink("Delete",
                                    array('controller'=>'Products','action'=>'delete',
                                    $product["Product"]["id"]),
                                   array('confirm' => 'Are you sure?')); ?>  
                        </div>
                    </td>


                </tr>

            <?php endforeach;?>
        </tbody>
    </table>

    <div class="navbar">
         <div class="navbar-inner">
            
            <ul class="nav">
                             
              <li ><a href="#">Anterior</a></li>
                <li class="divider-vertical"></li>
              <li class="active" ><a href="# 1"> 1 </a></li>
                <li class="divider-vertical"></li>
              <li><a href="#">2</a></li>
                <li class="divider-vertical"></li>
              <li><a href="#">Próximo</a></li>
                <li class="divider-vertical"></li>
              <li class="divider"></li>
            </ul>
         </div>
    </div>