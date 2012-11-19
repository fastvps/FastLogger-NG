<?php
/* @var $this LogsSyslogNgController */
/* @var $model LogsSyslogNg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'logs-syslog-ng-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'host'); ?>
		<?php echo $form->textArea($model,'host',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'host'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facility'); ?>
		<?php echo $form->textArea($model,'facility',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'facility'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textArea($model,'priority',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->textArea($model,'level',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tag'); ?>
		<?php echo $form->textArea($model,'tag',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'program'); ?>
		<?php echo $form->textArea($model,'program',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'program'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'msg'); ?>
		<?php echo $form->textArea($model,'msg',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'msg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inserted_at'); ?>
		<?php echo $form->textField($model,'inserted_at'); ?>
		<?php echo $form->error($model,'inserted_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->