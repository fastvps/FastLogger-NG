<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . " The main page";
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>The Web-based application to view logs from syslog-ng</p>

<p>You can download this application from GitHub: <?=CHtml::link('https://github.com/fastvps/FastLogger-NG.git', 'https://github.com/fastvps/FastLogger-NG.git')?></p>
<p>Please read README.md. Thank you!</p>
