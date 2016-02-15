<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('key')); ?>:</b>
	<?php echo CHtml::encode($data->key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_tag')); ?>:</b>
	<?php echo CHtml::encode($data->meta_tag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_desc')); ?>:</b>
	<?php echo CHtml::encode($data->meta_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumb_image')); ?>:</b>
	<?php echo CHtml::encode($data->thumb_image); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	*/ ?>

</div>