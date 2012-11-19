<?php
/* @var $this LogsNetconsoleController */
/* @var $model LogsNetconsole */

$this->breadcrumbs=array(
	'Logs Netconsoles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LogsNetconsole', 'url'=>array('index')),
	array('label'=>'Manage LogsNetconsole', 'url'=>array('admin')),
);
?>

<h1>Create LogsNetconsole</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>