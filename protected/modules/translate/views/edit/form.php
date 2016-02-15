<script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>

<?php $action=$model->getIsNewRecord() ? 'Create' : 'Update';?>
<?php $breadcrumb=$model->getIsNewRecord() ? '<li class="active"><span class="fa fa-plus"></span> Create</li>' : '<li class="active"><span class="fa fa-edit"></span> Update</li>';?>

<h1><span class="fa fa-flag"></span> <?php echo TranslateModule::t(($action) . ' Message')." # ".$model->id." - ".TranslateModule::translator()->acceptedLanguages[$model->language]; ?><hr></h1>
<ul class="breadcrumb" style="background-color:#F8F8F8;">
    <li><a href="<?php echo Yii::app()->createUrl('site/admin'); ?>"><span class="fa fa-dashboard"></span> Dashboard</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('translate/edit/admin'); ?>"><span class="fa fa-flag"></span> Translation</a></li>
    <?php echo TranslateModule::t($breadcrumb); ?>
</ul><hr>

<div class="container" style="margin-bottom:30px;min-height:450px;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->hiddenField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	<?php echo $form->hiddenField($model,'language',array('size'=>16,'maxlength'=>16)); ?>

	<table>
		<tr>
			<td><?php echo $form->label($model->source,'category'); ?></td>
			<td><?php echo $form->textField($model->source,'category',array('disabled'=>'disabled')); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->label($model->source,'message'); ?></td>
			<td><?php echo $form->textField($model->source,'message',array('disabled'=>'disabled')); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'translation'); ?></td>
			<td><?php //echo $form->textArea($model,'translation',array('rows'=>2, 'cols'=>80)); ?>
				<?php echo $form->textArea($model,'translation',array('id'=>'editor1')); ?>
				<?php echo $form->error($model,'translation'); ?></td>
		</tr>
		<tr>
			<td colspan="2"><?php echo CHtml::submitButton(TranslateModule::t($action)); ?></td>
		</tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- container -->

<script type="text/javascript">
	CKEDITOR.replace('editor1',
		{
			"extraPlugins": "imgbrowse",
			"filebrowserImageBrowseUrl": '<?php echo Yii::app()->request->baseUrl."/ckeditor/plugins/imgbrowse/imgbrowse.html?imgroot=SupraCompProfile/images/"; ?>'
		}
	);
</script>