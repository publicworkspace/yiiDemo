<?php
/* @var $this SalaryController */
/* @var $model Salary */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary_month'); ?>
		<?php echo $form->textField($model,'salary_month'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_no'); ?>
		<?php echo $form->textField($model,'job_no',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'base_pay'); ?>
		<?php echo $form->textField($model,'base_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_subsidies'); ?>
		<?php echo $form->textField($model,'job_subsidies'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus'); ?>
		<?php echo $form->textField($model,'bonus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'repair_diff'); ?>
		<?php echo $form->textField($model,'repair_diff'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subsidy_tel'); ?>
		<?php echo $form->textField($model,'subsidy_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subsidy_traffic'); ?>
		<?php echo $form->textField($model,'subsidy_traffic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subsidy_meal'); ?>
		<?php echo $form->textField($model,'subsidy_meal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subsidy_computer'); ?>
		<?php echo $form->textField($model,'subsidy_computer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'repair_subsidy'); ?>
		<?php echo $form->textField($model,'repair_subsidy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'repair_cpf'); ?>
		<?php echo $form->textField($model,'repair_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loan'); ?>
		<?php echo $form->textField($model,'loan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'special_cpf'); ?>
		<?php echo $form->textField($model,'special_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'old_age_insurance'); ?>
		<?php echo $form->textField($model,'old_age_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unemployment_insurance'); ?>
		<?php echo $form->textField($model,'unemployment_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medical_insurance'); ?>
		<?php echo $form->textField($model,'medical_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'social_security_cpf'); ?>
		<?php echo $form->textField($model,'social_security_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'checking_in'); ?>
		<?php echo $form->textField($model,'checking_in'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->