<?php
$this->breadcrumbs=array(
	'Portfolios',
);

$this->menu=array(
array('label'=>'Create Portfolio','url'=>array('create')),
array('label'=>'Manage Portfolio','url'=>array('admin')),
);
?>

<h1>Portfolios</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
