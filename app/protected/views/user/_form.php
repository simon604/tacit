<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<!-- <div class="small-3 columns"> -->
			<!-- <?php echo $form->label($model,'username', array('class' => 'right inline')); ?> -->
	    <!-- </div> -->
	    <div class="small-12 columns">
	    	<?php echo $form->textField($model,'username',array('class' => 'jubilat regular','size'=>60,'maxlength'=>128, 'placeholder' => 'Username')); ?>
	    </div>
	</div>

	<div class="row">
		<!-- <div class="small-3 columns"> -->
			<!-- <?php echo $form->label($model,'email', array('class' => 'right inline')); ?> -->
	    <!-- </div> -->
	    <div class="small-12 columns">
	    	<?php echo $form->textField($model,'email',array('class' => 'jubilat regular','size'=>60,'maxlength'=>128, 'placeholder' => 'Your Email')); ?>
	    </div>
	</div>

	<div class="row">
		<!-- <div class="small-3 columns"> -->
			<!-- <?php echo $form->label($model,'password', array('class' => 'right inline')); ?> -->
	    <!-- </div> -->
	    <div class="small-12 columns">
	    	<?php echo $form->passwordField($model,'password',array('class' => 'jubilat regular','size'=>60,'maxlength'=>128, 'placeholder' => 'Choose a Password')); ?>
	    </div>
	</div>

	
	<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'CREATE ACCOUNT!' : 'Save', array('class' => 'dark-orange large button expand brandon bold')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->