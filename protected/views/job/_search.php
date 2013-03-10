<?php
/* @var $this JobController */
/* @var $model Job */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'job_id'); ?>
		<?php echo $form->textField($model,'job_id',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_reference'); ?>
		<?php echo $form->textField($model,'job_reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_description'); ?>
		<?php echo $form->textField($model,'job_description',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'published_date'); ?>
		<?php echo $form->textField($model,'published_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expiry_date'); ?>
		<?php echo $form->textField($model,'expiry_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'region'); ?>
		<?php echo $form->textField($model,'region',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apply_date'); ?>
		<?php echo $form->textField($model,'apply_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catogeory'); ?>
		<?php echo $form->textField($model,'catogeory',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_ad_website'); ?>
		<?php echo $form->textField($model,'job_ad_website',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->