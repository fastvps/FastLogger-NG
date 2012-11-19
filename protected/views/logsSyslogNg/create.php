<?php
/* @var $this LogsSyslogNgController */
/* @var $model LogsSyslogNg */

$this->breadcrumbs=array(
	'Logs Syslog Ngs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LogsSyslogNg', 'url'=>array('index')),
	array('label'=>'Manage LogsSyslogNg', 'url'=>array('admin')),
);
?>

<h1>Create LogsSyslogNg</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>