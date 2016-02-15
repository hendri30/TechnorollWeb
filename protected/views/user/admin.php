<h1><span class="fa fa-user"></span> User<hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
	<li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
	<li><a href="<?php echo Yii::app()->createUrl('user/admin'); ?>"><span class="fa fa-user"></span> User</a></li>
	<li class="active"><span class="fa fa-cog"></span> Manage</li>
</ul><hr>

<a href="<?php echo Yii::app()->createUrl('user/create'); ?>" class="btn btn-default"><span class="fa fa-plus"></span> Create</a>

<?php $this->widget('booster.widgets.TbGridView',array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'id',
			'htmlOptions'=>array('style'=>'width:80px;'),
		),
		'username',
		'password',
		array(
			'name'=>'role_id',
			'value'=>'$data->role->role_name',
			'filter'=>CHtml::listData(Role::model()->findAll(array('order'=>'id')),'id','role_name'),
		),
		'last_login',
		array(
			'class'=>'booster.widgets.TbButtonColumn',
			'htmlOptions'=>array('style'=>'width:80px;'),
		),
	),
)); ?>
