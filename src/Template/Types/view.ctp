<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Type $type
 */
?>

<head>
 
	<style>
        .btn-primary {
          color: #fff;
          background-color: #0099FF;
          border-color: #0099FF;
          float: right;
          margin-left: 10px;
        }
	</style>

</head>

<div class="locations form large-9 medium-8 columns content">
  <?= $this->Form->create($asset) ?>
  <fieldset>
    <legend><?= __('Insertar tipo de activo') ?></legend>
    <br>

    <div class="form-control sameLine" >
	
      <div class="row">
          <label> <b>Nombre:</b><b style="color:red;">*</b> </label>
		  <?php echo $this->Form->imput('plaque', ['class'=>'form-control col-md-9']); ?> 
      </div>
        
    </div> <br>
	
	<div>
      <label> Descripción: </label>
      <?php echo $this->Form->textarea('description', ['class'=>'form-control col-md-8']); ?>
    </div> <br>

  </fieldset>

</div>





<div class="col-md-12 col-sm-12">
    <h3>Consultar tipo de activo</h3>
</div>

<div class="types view large-9 medium-8 columns content">

   <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($type->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripción') ?></th>
            <td><?= h($type->description) ?></td>
        </tr>
   </table>





<style>
.btn-primary {
    float: right;
    margin: 10px;
    margin-top: 15px;
    color: #fff
    background-color: #ffc107;
     border-color: #ffc107;
    }
</style>    
</div>

<?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>

<?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $type->type_id], ['class' => 'btn btn-primary', 'confirm' => __('Seguro que desea eliminar el tipo de activo # {0}?', $type->type_id)]) ?>

<?= $this->Html->link(__('Editar'), ['action' => 'edit', $type->type_id], ['class' => 'btn btn-primary']) ?>
    
