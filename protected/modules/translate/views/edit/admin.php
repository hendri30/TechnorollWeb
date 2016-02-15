<h1><span class="fa fa-flag"></span> <?php echo TranslateModule::t('Manage Translation')?><hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
    <li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('translate/edit/admin'); ?>"><span class="fa fa-flag"></span> Translation</a></li>
    <li class="active"><span class="fa fa-cog"></span> Manage</li>
</ul><hr>

<a href="<?php echo Yii::app()->createUrl('translate/edit/missing'); ?>" class="btn btn-default"><span class="fa fa-warning"></span> Missing</a>

<div class="container" style="margin-bottom:30px;min-height:450px;">

<?php 
$source=MessageSource::model()->findAll();
$this->widget('booster.widgets.TbGridView',array(
	'id'=>'message-grid',
    'type'=>'striped bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
            'name'=>'id',
            'filter'=>CHtml::listData($source,'id','id'),
        ),
        array(
            'name'=>'message',
            //'filter'=>CHtml::listData($source,'message','message'),
            'value'=>'strlen($data->message) > 5 ? substr($data->message, 0, 100)."..." : $data->message',
            'htmlOptions'=>array('style'=>'width:400px;'),
        ),
        array(
            'name'=>'category',
            'filter'=>CHtml::listData($source,'category','category'),
        ),
        array(
            'name'=>'language',
            'filter'=>CHtml::listData($model->findAll(new CDbCriteria(array('group'=>'language'))),'language','language'),

        ),
        array(
            'name'=>'translation',
            'value'=>'strlen($data->translation) > 5 ? substr($data->translation, 0, 100)."..." : $data->translation',
            'htmlOptions'=>array('style'=>'width:400px;'),
        ),
        array(
            'class'=>'booster.widgets.TbButtonColumn',
            'template'=>'{update} {delete}',
            'updateButtonUrl'=>'Yii::app()->getController()->createUrl("update",array("id"=>$data->id,"language"=>$data->language))',
            'deleteButtonUrl'=>'Yii::app()->getController()->createUrl("delete",array("id"=>$data->id,"language"=>$data->language))',
        )
	),
)); ?>

</div>