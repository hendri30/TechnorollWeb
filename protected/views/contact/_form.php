<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'contact-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'name',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>64)))); ?>

	<?php echo $form->textFieldGroup($model,'email',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>64)))); ?>

	<?php echo $form->textFieldGroup($model,'subject',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>64)))); ?>

	<?php echo $form->textAreaGroup($model,'message', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textFieldGroup($model,'created',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
