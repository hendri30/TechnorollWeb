<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'username',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>64)))); ?>

	<?php echo $form->passwordFieldGroup($model,'password',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>128)))); ?>

	<?php echo $form->dropDownListGroup($model,'role_id',array(
		'wrapperHtmlOptions'=>array(
			'class'=>'col-sm-5',
		),
		'widgetOptions'=>array(
			'data'=>CHtml::listData(Role::model()->findAll(array('order'=>'role_name ASC')),'id','role_name'),
			'htmlOptions'=>array(
				'empty'=>'Choose',
			),
		),
	)); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
		'buttonType'=>'submit',
		'context'=>'primary',
		'label'=>$model->isNewRecord ? 'Create' : 'Save',
	)); ?>
</div>

<?php $this->endWidget(); ?>
