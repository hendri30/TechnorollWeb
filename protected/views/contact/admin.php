<h1><span class="fa fa-book"></span> Contact<hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
	<li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
	<li><a href="<?php echo Yii::app()->createUrl('contact/admin'); ?>"><span class="fa fa-envelope"></span> Contact</a></li>
	<li class="active"><span class="fa fa-cog"></span> Manage</li>
</ul><hr>

<?php $this->widget('booster.widgets.TbGridView',array(
	'id'=>'contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'email',
		'subject',
		'message',
		'created',
		array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>
