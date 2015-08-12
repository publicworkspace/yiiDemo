<?php
/* @var $this SalaryController */
/* @var $data Salary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_month')); ?>:</b>
	<?php echo CHtml::encode($data->salary_month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_no')); ?>:</b>
	<?php echo CHtml::encode($data->job_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('base_pay')); ?>:</b>
	<?php echo CHtml::encode($data->base_pay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_subsidies')); ?>:</b>
	<?php echo CHtml::encode($data->job_subsidies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus')); ?>:</b>
	<?php echo CHtml::encode($data->bonus); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('repair_diff')); ?>:</b>
	<?php echo CHtml::encode($data->repair_diff); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subsidy_tel')); ?>:</b>
	<?php echo CHtml::encode($data->subsidy_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subsidy_traffic')); ?>:</b>
	<?php echo CHtml::encode($data->subsidy_traffic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subsidy_meal')); ?>:</b>
	<?php echo CHtml::encode($data->subsidy_meal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subsidy_computer')); ?>:</b>
	<?php echo CHtml::encode($data->subsidy_computer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repair_subsidy')); ?>:</b>
	<?php echo CHtml::encode($data->repair_subsidy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repair_cpf')); ?>:</b>
	<?php echo CHtml::encode($data->repair_cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loan')); ?>:</b>
	<?php echo CHtml::encode($data->loan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('special_cpf')); ?>:</b>
	<?php echo CHtml::encode($data->special_cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_age_insurance')); ?>:</b>
	<?php echo CHtml::encode($data->old_age_insurance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::encode($data->cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unemployment_insurance')); ?>:</b>
	<?php echo CHtml::encode($data->unemployment_insurance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medical_insurance')); ?>:</b>
	<?php echo CHtml::encode($data->medical_insurance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('social_security_cpf')); ?>:</b>
	<?php echo CHtml::encode($data->social_security_cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('checking_in')); ?>:</b>
	<?php echo CHtml::encode($data->checking_in); ?>
	<br />

	*/ ?>

</div>