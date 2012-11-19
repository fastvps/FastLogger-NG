<?php
/* @var $this LogsSyslogNgController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Logs Syslog Ngs',
);

$this->menu=array(
	array('label'=>'Create LogsSyslogNg', 'url'=>array('create')),
	array('label'=>'Manage LogsSyslogNg', 'url'=>array('admin')),
);
?>

<h1>Logs Syslog Ngs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
