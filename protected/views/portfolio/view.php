<h1><span class="fa fa-briefcase"></span> Portfolio<hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
	<li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
	<li><a href="<?php echo Yii::app()->createUrl('portfolio/admin'); ?>"><span class="fa fa-briefcase"></span> Portfolio</a></li>
	<li class="active"><span class="fa fa-eye"></span> View</li>
	<li class="active"><?php echo $model->id; ?></li>
</ul><hr>

<h1>View Portfolio #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		array(
			'label'=>'Portfolio',
			'type'=>'raw',
			'value'=>CHtml::image(Yii::app()->request->baseUrl.'/images/portfolio/'.$model->file_name,'image', array("class"=>"img-responsive","alt"=>"","style"=>"width:250px;")),
		),
		'link',
		array(
			'name'=>'active',
			'value'=>function($model){
				return ($model->active?"Yes":"No");
			}
		),
	),
)); ?>
