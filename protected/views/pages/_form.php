<script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'pages-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php if($model['key']=='about' || $model['key']=='features') {
		echo $form->hiddenField($model,'key',array('value'=>$model->key));
	} else {
		echo $form->textFieldGroup($model,'key',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>80))));
	} ?>

	<?php echo $form->labelEx($model,'meta_tag'); ?>
	<?php echo $form->textField($model,'meta_tag',array('id'=>'Pages_meta_tag','style'=>'width:100%','placeholder'=>'Meta Tag'));
	$this->widget('ext.select2.ESelect2',array(
		'selector'=>'#Pages_meta_tag',
		'options'=>[
			'tags'=>true,
			'tokenSeparators'=>[',',' '],
		],
	)); ?>

	<?php echo $form->textAreaGroup($model,'meta_tag', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textAreaGroup($model,'meta_desc', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textFieldGroup($model,'name',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>120)))); ?>

	<?php echo $form->labelEx($model,'content'); ?>
	<?php echo $form->textArea($model,'content',array('id'=>'editor1')); ?>

	<?php echo $form->fileFieldGroup($model,'thumb_image',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
		'buttonType'=>'submit',
		'context'=>'primary',
		'label'=>$model->isNewRecord ? 'Create' : 'Save',
	)); ?>
</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
	CKEDITOR.replace('editor1',
		{
			"extraPlugins": "imgbrowse",
			"filebrowserImageBrowseUrl": '<?php echo Yii::app()->request->baseUrl."/ckeditor/plugins/imgbrowse/imgbrowse.html?imgroot=TechnorollWeb/images/"; ?>'
		}
	);
</script>