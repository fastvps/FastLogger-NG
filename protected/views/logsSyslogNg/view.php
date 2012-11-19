<?php
/* @var $this LogsSyslogNgController */
/* @var $model LogsSyslogNg */

$this->breadcrumbs=array(
	'Logs Syslog Ngs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LogsSyslogNg', 'url'=>array('index')),
	array('label'=>'Create LogsSyslogNg', 'url'=>array('create')),
	array('label'=>'Update LogsSyslogNg', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LogsSyslogNg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LogsSyslogNg', 'url'=>array('admin')),
);
?>

<h1>View LogsSyslogNg #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'host',
		'facility',
		'priority',
		'level',
		'tag',
		'program',
		'msg',
		'inserted_at',
	),
)); ?>
