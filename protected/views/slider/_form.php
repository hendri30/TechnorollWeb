<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'slider-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'caption',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php echo $form->textAreaGroup($model,'quotes', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->fileFieldGroup($model,'file_name',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->dropDownListGroup($model,'active', array('widgetOptions'=>array('data'=>array("1"=>"Yes","0"=>"No",), 'htmlOptions'=>array('class'=>'input-large','empty'=>'Choose')))); ?>

	<?php echo $form->textFieldGroup($model,'sequence',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
		'buttonType'=>'submit',
		'context'=>'primary',
		'label'=>$model->isNewRecord ? 'Create' : 'Save',
	)); ?>
</div>

<?php $this->endWidget(); ?>
