<h1>Manage Logs Syslog Ngs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>


<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'id'=>'logs-syslog-ng-grid',
    'type'=>'striped bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'host',
        array (
            'name' => 'level',
            'type'=>'raw',
            'filter' => LogsSyslogNg::getLevels(),
        ),
        'program',
        'msg',
        'facility',
		'inserted_at',
	),
)); ?>
