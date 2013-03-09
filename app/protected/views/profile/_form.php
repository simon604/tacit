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
			<?php echo $form->radioButtonList($model,'role', $model->getRoleOptions(), array('separator' => '<span style="height:10px;display:block;"></span>')); ?>
		</div>
	</div>

	<div class="row">
		<div class="large-6 columns">
			<!-- <?php echo $form->label($model,'firstname'); ?> -->
			<?php echo $form->textField($model,'firstname',array('size'=>50,'maxlength'=>50, 'placeholder' =>'First Name')); ?>
		</div>
		<div class="large-6 columns">
			<!-- <?php echo $form->label($model,'lastname'); ?> -->
			<?php echo $form->textField($model,'lastname',array('size'=>50,'maxlength'=>50, 'placeholder' =>'Last Name')); ?>
		</div>
	</div>

	<div class="row">
		<div class="large-6 columns">
			<!-- <?php echo $form->label($model,'location'); ?> -->
			<?php echo $form->textField($model,'location',array('size'=>50,'maxlength'=>50, 'placeholder' =>'Neighbourhood')); ?>
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns">
			<!-- <?php echo $form->labelEx($model,'share_expertise'); ?> -->
			<?php echo $form->textField($model,'share_expertise',array('size'=>60,'maxlength'=>256, 'placeholder' =>'Primary creative skills you\'d like to mentor')); ?>
			<!-- <?php echo $form->error($model,'share_expertise'); ?> -->
		</div>
	</div>

	<div class="row">
		<div class="large-6 columns">
			<!-- <?php echo $form->label($model,'experience'); ?> -->
			<?php echo $form->textField($model,'experience',array('size'=>50,'maxlength'=>50, 'placeholder' =>'Years of Experience')); ?>
		</div>
		<div class="large-6 columns">
			<!-- <?php echo $form->label($model,'level'); ?> -->
			<?php echo $form->dropDownList($model,'level', $model->getLevelOptions()); ?>
		</div>
	</div>

	<br>
	<div class="input-row">
		<?php echo $form->label($model,'image_path'); ?>
		<?php echo $form->fileField($model,'image_path'); ?>
		<?php echo $form->error($model,'image_path'); ?>
	</div>

	<br><br>
	<div class="input-row buttons">
		<?php echo CHtml::submitButton('DONE', array('class' => 'dark-orange large button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->