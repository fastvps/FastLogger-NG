<?php
/* @var $this LogsNetconsoleController */
/* @var $model LogsNetconsole */

$this->breadcrumbs=array(
	'Logs Netconsoles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LogsNetconsole', 'url'=>array('index')),
	array('label'=>'Create LogsNetconsole', 'url'=>array('create')),
	array('label'=>'Update LogsNetconsole', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LogsNetconsole', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LogsNetconsole', 'url'=>array('admin')),
);
?>

<h1>View LogsNetconsole #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'host',
		'datetime',
		'msg',
	),
)); ?>
