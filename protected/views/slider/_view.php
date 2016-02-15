<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caption')); ?>:</b>
	<?php echo CHtml::encode($data->caption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quotes')); ?>:</b>
	<?php echo CHtml::encode($data->quotes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_name')); ?>:</b>
	<?php echo CHtml::encode($data->file_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sequence')); ?>:</b>
	<?php echo CHtml::encode($data->sequence); ?>
	<br />


</div>