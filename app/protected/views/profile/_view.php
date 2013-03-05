<?php
/* @var $this ProfileController */
/* @var $data Profile */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('share_expertise')); ?>:</b>
	<?php echo CHtml::encode($data->share_expertise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('share_expertise_description')); ?>:</b>
	<?php echo CHtml::encode($data->share_expertise_description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('learn_expertise')); ?>:</b>
	<?php echo CHtml::encode($data->learn_expertise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('learn_expertise_description')); ?>:</b>
	<?php echo CHtml::encode($data->learn_expertise_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_path')); ?>:</b>
	<?php echo CHtml::encode($data->image_path); ?>
	<br />

	*/ ?>

</div>