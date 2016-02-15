<h1><span class="fa fa-flag"></span> <?php echo TranslateModule::t('Missing Translations')." - ".TranslateModule::translator()->acceptedLanguages[Yii::app()->getLanguage()]?><hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
    <li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('translate/edit/admin'); ?>"><span class="fa fa-flag"></span> Translation</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('translate/edit/admin'); ?>"><span class="fa fa-cog"></span> Manage</a></li>
    <li class="active"><span class="fa fa-warning"></span> Missing</li>
</ul><hr>

<a href="<?php echo Yii::app()->createUrl('translate/edit/admin'); ?>" class="btn btn-default"><span class="fa fa-cog"></span> Manage</a>

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
            'htmlOptions'=>array('style'=>'width:80px;'),
        ),
        array(
            'name'=>'message',
            // 'filter'=>CHtml::listData($source,'message','message'),
            'value'=>'strlen($data->message) > 5 ? substr($data->message, 0, 100)."..." : $data->message',
        ),
        array(
            'name'=>'category',
            'filter'=>CHtml::listData($source,'category','category'),
        ),
        array(
            'class'=>'booster.widgets.TbButtonColumn',
            'template'=>'{create} {delete}',
            'deleteButtonUrl'=>'Yii::app()->getController()->createUrl("missingdelete",array("id"=>$data->id))',
            'buttons'=>array(
                'create'=>array(
                    'label'=>TranslateModule::t('Create'),
                    'url'=>'Yii::app()->getController()->createUrl("create",array("id"=>$data->id,"language"=>Yii::app()->getLanguage()))'
                )
            ),
            'header'=>TranslateModule::translator()->dropdown(),
        )
	),
)); ?>

</div>