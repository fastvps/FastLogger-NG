<?php
/* @var $this LogsSyslogNgController */
/* @var $model LogsSyslogNg */

$this->breadcrumbs=array(
	'Logs Syslog Ngs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LogsSyslogNg', 'url'=>array('index')),
	array('label'=>'Create LogsSyslogNg', 'url'=>array('create')),
	array('label'=>'View LogsSyslogNg', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LogsSyslogNg', 'url'=>array('admin')),
);
?>

<h1>Update LogsSyslogNg <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>