<h1><span class="fa fa-user"></span> User<hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
	<li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
	<li><a href="<?php echo Yii::app()->createUrl('user/admin'); ?>"><span class="fa fa-user"></span> User</a></li>
	<li class="active"><span class="fa fa-eye"></span> View</li>
	<li class="active"><?php echo $model->id; ?></li>
</ul><hr>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		array(
			'name'=>'role_id',
			'value'=>$model->role->role_name,
		),
		'last_login',
	),
)); ?>
