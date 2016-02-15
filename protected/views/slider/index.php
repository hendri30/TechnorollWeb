<?php
$this->breadcrumbs=array(
	'Sliders',
);

$this->menu=array(
array('label'=>'Create Slider','url'=>array('create')),
array('label'=>'Manage Slider','url'=>array('admin')),
);
?>

<h1>Sliders</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
