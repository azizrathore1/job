<?php
/* @var $this JobController */
/* @var $data Job */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->job_id), array('view', 'id'=>$data->job_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_reference')); ?>:</b>
	<?php echo CHtml::encode($data->job_reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_title')); ?>:</b>
	<?php echo CHtml::encode($data->job_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_description')); ?>:</b>
	<?php echo CHtml::encode($data->job_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('published_date')); ?>:</b>
	<?php echo CHtml::encode($data->published_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expiry_date')); ?>:</b>
	<?php echo CHtml::encode($data->expiry_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($data->region); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_date')); ?>:</b>
	<?php echo CHtml::encode($data->apply_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catogeory')); ?>:</b>
	<?php echo CHtml::encode($data->catogeory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_ad_website')); ?>:</b>
	<?php echo CHtml::encode($data->job_ad_website); ?>
	<br />

	*/ ?>

</div>