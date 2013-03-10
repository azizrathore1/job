<?php
/* @var $this JobController */
/* @var $model Job */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->job_id,
);

$this->menu=array(
	array('label'=>'List Job', 'url'=>array('index')),
	array('label'=>'Create Job', 'url'=>array('create')),
	array('label'=>'Update Job', 'url'=>array('update', 'id'=>$model->job_id)),
	array('label'=>'Delete Job', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->job_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Job', 'url'=>array('admin')),
);
?>

<h1>View Job #<?php echo $model->job_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'job_id',
		'job_reference',
		'job_title',
		'job_description',
		'published_date',
		'expiry_date',
		'country',
		'region',
		'apply_date',
		'catogeory',
		'job_ad_website',
	),
)); ?>
