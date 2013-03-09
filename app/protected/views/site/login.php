<div class="row" style="margin-top:40px;">
	<div class="large-6 large-centered columns text-center">
		<h1>TACIT Login</h1>
	</div>
</div>

<div class="row">
	<div class="large-7 large-centered columns">
		<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>

				<div class="row">
					<div class="small-3 columns">
						<?php echo $form->labelEx($model,'username', array('class' => 'right inline')); ?>
			        </div>
			        <div class="small-9 columns">
			        	<?php echo $form->textField($model,'username'); ?>
			        </div>
				</div>

				<div class="row">
					<div class="small-3 columns">
						<?php echo $form->labelEx($model,'password', array('class' => 'right inline') ); ?>
			        </div>
			        <div class="small-9 columns">
			        	<?php echo $form->passwordField($model,'password'); ?>
			        </div>
				</div>

				<div class="row buttons right">
					<?php echo CHtml::submitButton('LOGIN', array('class' => 'dark-orange large button')); ?>
				</div>

			<?php $this->endWidget(); ?>
		</div><!-- form -->
	</div>
</div>