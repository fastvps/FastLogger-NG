<?php
/* @var $this LogsNetconsoleController */
/* @var $model LogsNetconsole */

$this->breadcrumbs=array(
	'Logs Netconsoles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LogsNetconsole', 'url'=>array('index')),
	array('label'=>'Create LogsNetconsole', 'url'=>array('create')),
	array('label'=>'View LogsNetconsole', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LogsNetconsole', 'url'=>array('admin')),
);
?>

<h1>Update LogsNetconsole <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>