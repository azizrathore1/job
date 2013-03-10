<?php
/* @var $this JobController */
/* @var $model Job */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-form',
	'enableAjaxValidation'=>false,
)); ?>
<p>We all love the Convenient gadget namely jQuery UI Datapicker as an input yii supports 
	it as CJDatePicker. let's see how to use it. 
</p>
<h1>Basic</h1>
<p>Imagine we have a text field for date in our form</p>
<p>As you see, we are using a CAtiveForm here. and now replace the text field with CJuiDatePicker.</p>
<p>Basically this is all you have to do..</p>
<ul>
	<li> You don't need to load the javascript files(i.e JQuery and JqQuery UI) and css files by yourself..</li>
	<li> You don't need to to write text field your self...</li>
	<li> You don't need to write a script to convert the text field into Datepicker by yourself.</li>
</ul>
<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'job_reference'); ?>
		<?php echo $form->textField($model,'job_reference'); ?>
		<?php echo $form->error($model,'job_reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'job_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_description'); ?>
		<?php echo $form->textArea($model,'job_description',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'job_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'published_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'published_date',
			'htmlOptions' => array(
			'size' => '10',         // textField size
			'maxlength' => '10',    // textField maxlength
			),
		));
		?>
		<!--?php echo $form->textField($model,'published_date'); ?-->
		<?php echo $form->error($model,'published_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expiry_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'expiry_date',
			'htmlOptions' => array(
			'size' => '10',         // textField size
			'maxlength' => '10',    // textField maxlength
			),
		));
		?>
		<!--?php echo $form->textField($model,'expiry_date'); ?-->
		<?php echo $form->error($model,'expiry_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'region'); ?>
		<?php echo $form->textField($model,'region',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'region'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apply_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'apply_date',
			'htmlOptions' => array(
			'size' => '10',         // textField size
			'maxlength' => '10',    // textField maxlength
			),
		));
		?>
		<!--?php echo $form->textField($model,'apply_date'); ?-->
		<?php echo $form->error($model,'apply_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catogeory'); ?>
		<?php echo $form->textField($model,'catogeory',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'catogeory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_ad_website'); ?>
		<?php echo $form->textField($model,'job_ad_website',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'job_ad_website'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->