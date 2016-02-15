<h1><span class="fa fa-desktop"></span> Slider<hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
	<li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
	<li><a href="<?php echo Yii::app()->createUrl('slider/admin'); ?>"><span class="fa fa-desktop"></span> Slider</a></li>
	<li class="active"><span class="fa fa-edit"></span> Update</li>
	<li class="active"><?php echo $model->id; ?></li>
</ul><hr>

<h1>Update Slider <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>