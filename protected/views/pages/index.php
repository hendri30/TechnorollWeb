<?php
$this->breadcrumbs=array(
	'Pages',
);

$this->menu=array(
array('label'=>'Create Pages','url'=>array('create')),
array('label'=>'Manage Pages','url'=>array('admin')),
);
?>

<h1>Pages</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
