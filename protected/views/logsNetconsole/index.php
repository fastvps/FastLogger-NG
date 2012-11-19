<?php
/* @var $this LogsNetconsoleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Logs Netconsoles',
);

$this->menu=array(
	array('label'=>'Create LogsNetconsole', 'url'=>array('create')),
	array('label'=>'Manage LogsNetconsole', 'url'=>array('admin')),
);
?>

<h1>Logs Netconsoles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
