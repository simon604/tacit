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
        'class' => 'custom'
    ),
)); ?>

	<div class="row">
		<div class="large-12 columns">
			<?php echo $form->labelEx($model,'share_expertise_description'); ?>
			<?php echo $form->textArea($model,'share_expertise_description',array('size'=>60,'maxlength'=>512)); ?>
			<?php echo $form->error($model,'share_expertise_description'); ?>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="large-12 columns">
			<?php echo $form->labelEx($model,'learn_expertise'); ?>
			<?php echo $form->textField($model,'learn_expertise',array('size'=>60,'maxlength'=>512)); ?>
			<?php echo $form->error($model,'learn_expertise'); ?>
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns">
			<?php echo $form->labelEx($model,'learn_expertise_description'); ?>
			<?php echo $form->textArea($model,'learn_expertise_description',array('size'=>60,'maxlength'=>512)); ?>
			<?php echo $form->error($model,'learn_expertise_description'); ?>
		</div>
	</div>
<br>
	<div class="row buttons">
		<div class="large-12 columns">
			<?php echo CHtml::submitButton('CONTINUE', array('class' => 'dark-orange large button')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->