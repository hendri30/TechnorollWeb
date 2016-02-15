<?php if(Yii::app()->user->isGuest){ ?>

<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<div class="log-input">
	<div class="log-input-left">
		<!-- <input type="text" class="user" value="<?php echo $model->username; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"/>
		<input type="text" class="lock" value="<?php echo $model->password; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/> -->

		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'user')); ?>
		<?php echo $form->error($model,'username'); ?>

		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'lock')); ?>
		<?php echo $form->error($model,'password'); ?>
	
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
</div>

	<?php echo CHtml::submitButton('Login'); ?>

<?php $this->endWidget(); ?>

<?php } ?>
<?php if(!Yii::app()->user->isGuest){
	header('location:admin');
} ?>