<h1><span class="fa fa-briefcase"></span> Portfolio<hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
	<li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
	<li><a href="<?php echo Yii::app()->createUrl('portfolio/admin'); ?>"><span class="fa fa-briefcase"></span> Portfolio</a></li>
	<li class="active"><span class="fa fa-plus"></span> Create</li>
</ul><hr>

<h1>Create Portfolio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>