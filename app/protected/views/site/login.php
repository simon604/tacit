<div class="row">
	<div class="large-6 large-centered columns text-center">
		<h1>Member Sign In</h1>
	</div>
</div>

<div class="row">
	<div class="large-6 large-centered columns">
		<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>

				<div class="row">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username'); ?>
					<?php echo $form->error($model,'username'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'password'); ?>
					<?php echo $form->passwordField($model,'password'); ?>
					<?php echo $form->error($model,'password'); ?>
				</div>

				<div class="row buttons">
					<?php echo CHtml::submitButton('Login', array('class' => 'large button')); ?>
				</div>

			<?php $this->endWidget(); ?>
		</div><!-- form -->
	</div>
</div>