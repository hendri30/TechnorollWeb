<h1><span class="fa fa-desktop"></span> Slider<hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
	<li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
	<li><a href="<?php echo Yii::app()->createUrl('slider/admin'); ?>"><span class="fa fa-desktop"></span> Slider</a></li>
	<li class="active"><span class="fa fa-cog"></span> Manage</li>
</ul><hr>

<a href="<?php echo Yii::app()->createUrl('slider/create'); ?>" class="btn btn-default"><span class="fa fa-plus"></span> Create</a>

<?php $this->widget('booster.widgets.TbGridView',array(
	'id'=>'slider-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'caption',
		'quotes',
		array(
			'name'=>'file_name',
			'type'=>'raw',
			'value'=>'CHtml::image(Yii::app()->baseUrl.\'/images/slider/\'.$data->file_name,\'\',array("width"=>80,"height"=>50))',
		),
		array(
			'name'=>'active',
			'filter'=>array('1'=>'Yes','0'=>'No'),
			'value'=>function($data){
				return ($data->active?"Yes":"No");
			}
		),
		'sequence',
		array(
			'class'=>'booster.widgets.TbButtonColumn',
			'htmlOptions'=>array('style'=>'width:80px;'),
		),
	),
)); ?>
