<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
        'class' => 'custom',
    ),
)); ?>

	<div class="row" style="margin-bottom: 20px;">
		<div class="large-12 columns">
			<?php echo $form->radioButtonList($model,'role', $model->getRoleOptions(), array('separator' => '<span style="width: 20px; display:inline-block;"></span>')); ?>
		</div>
	</div>

	<div class="row">
		<div class="large-6 columns">
			<?php echo $form->labelEx($model,'firstname'); ?>
			<?php echo $form->textField($model,'firstname',array('size'=>50,'maxlength'=>50)); ?>
		</div>
		<div class="large-6 columns">
			<?php echo $form->labelEx($model,'lastname'); ?>
			<?php echo $form->textField($model,'lastname',array('size'=>50,'maxlength'=>50)); ?>
		</div>
	</div>

	<div class="row">
		<div class="large-6 columns">
			<?php echo $form->labelEx($model,'location'); ?>
			<?php echo $form->dropDownList($model,'location', $model->getLocationOptions()); ?>
		</div>
	</div>

	<div class="input-row">
		<?php echo $form->labelEx($model,'image_path'); ?>
		<?php echo $form->fileField($model,'image_path'); ?>
		<?php echo $form->error($model,'image_path'); ?>
	</div>

	<br><br>
	<div class="input-row buttons">
		<?php echo CHtml::submitButton('DONE', array('class' => 'button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->