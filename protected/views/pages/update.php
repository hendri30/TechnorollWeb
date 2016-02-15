<h1><span class="fa fa-book"></span> Pages<hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
	<li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
	<li><a href="<?php echo Yii::app()->createUrl('pages/admin'); ?>"><span class="fa fa-book"></span> Pages</a></li>
	<li class="active"><span class="fa fa-edit"></span> Update</li>
	<li class="active"><?php echo $model->name; ?></li>
</ul><hr>

<a href="<?php echo Yii::app()->createUrl('pages/view',['id'=>$model->id]); ?>" class="btn btn-default"><span class="fa fa-edit"></span> Inline Editing</a>

<?php $this->widget('booster.widgets.TbAlert', array(
	'fade' => true,
	'closeText' => '&times;',
	'events' => array(),
	'htmlOptions' => array(),
	'userComponentId' => 'user',
	'alerts' => array(
		// success, info, warning, error or danger
		'error' => array('closeText' => '&times;'),
	),
));	?>

<div style="margin-bottom:50px;">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>