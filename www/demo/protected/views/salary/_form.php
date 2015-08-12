<?php
/* @var $this SalaryController */
/* @var $model Salary */
/* @var $form CActiveForm */
?>

<link type="text/css" rel="stylesheet" src="/demo/css/salary.css">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salary-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<table style="border:1px solid red;" cellspacing="0" cellpadding="0" >
		<tr>
			<td><?php echo $form->labelEx($model,Yii::t('salary_message','salary_month')); ?></td>
			<td colspan="3">
				<?php
				$this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'language'=>'zh_cn',
					'name'=>'salary_month',
					'value'=>Date('Y-m-d'),
					'options'=>array(
						'showAnim'=>'fold',
						'showOn'=>'both',
						'buttonImage'=>Yii::app()->request->baseUrl.'/images/calendar.gif',
						'maxDate'=>'new Date()',
						'buttonImageOnly'=>true,
						'dateFormat'=>'yy-mm-dd',
					),
					'htmlOptions'=>array(
						'style'=>'height:18px',
						'maxlength'=>8,
					),
				));
				?>
				<?php echo $form->error($model,'salary_month'); ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'工号'); ?></td>
			<td>
				<?php echo $form->textField($model,'job_no',array('size'=>10,'maxlength'=>10)); ?>
				<?php echo $form->error($model,'job_no'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'姓名'); ?></td>
			<td>
				<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'username'); ?>
			</td>
		</tr>
		<tr><td colspan="4" bgcolor="blue">①工资与奖金</td></tr>
		<tr>
			<td><?php echo $form->labelEx($model,'基本工资'); ?></td>
			<td>
				<?php echo $form->textField($model,'base_pay'); ?>
				<?php echo $form->error($model,'base_pay'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'岗位津贴'); ?></td>
			<td>
				<?php echo $form->textField($model,'job_subsidies'); ?>
				<?php echo $form->error($model,'job_subsidies'); ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'奖金'); ?></td>
			<td>
				<?php echo $form->textField($model,'bonus'); ?>
				<?php echo $form->error($model,'bonus'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'补以前月份差异'); ?></td>
			<td>
				<?php echo $form->textField($model,'repair_diff'); ?>
				<?php echo $form->error($model,'repair_diff'); ?>
			</td>
		</tr>
		<tr><td colspan="4" bgcolor="blue">②补助项目</td></tr>
	</table>


	<div class="row">
		<?php echo $form->labelEx($model,'电话补'); ?>
		<?php echo $form->textField($model,'subsidy_tel'); ?>
		<?php echo $form->error($model,'subsidy_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'交通补'); ?>
		<?php echo $form->textField($model,'subsidy_traffic'); ?>
		<?php echo $form->error($model,'subsidy_traffic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'餐补'); ?>
		<?php echo $form->textField($model,'subsidy_meal'); ?>
		<?php echo $form->error($model,'subsidy_meal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'电脑补'); ?>
		<?php echo $form->textField($model,'subsidy_computer'); ?>
		<?php echo $form->error($model,'subsidy_computer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'补以前月份补贴'); ?>
		<?php echo $form->textField($model,'repair_subsidy'); ?>
		<?php echo $form->error($model,'repair_subsidy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'补多扣公积金'); ?>
		<?php echo $form->textField($model,'repair_cpf'); ?>
		<?php echo $form->error($model,'repair_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'扣房租及个人借款'); ?>
		<?php echo $form->textField($model,'loan'); ?>
		<?php echo $form->error($model,'loan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'扣特殊公积金'); ?>
		<?php echo $form->textField($model,'special_cpf'); ?>
		<?php echo $form->error($model,'special_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'扣养老保险'); ?>
		<?php echo $form->textField($model,'old_age_insurance'); ?>
		<?php echo $form->error($model,'old_age_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'扣公积金'); ?>
		<?php echo $form->textField($model,'cpf'); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'扣失业保险'); ?>
		<?php echo $form->textField($model,'unemployment_insurance'); ?>
		<?php echo $form->error($model,'unemployment_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'扣医疗保险'); ?>
		<?php echo $form->textField($model,'medical_insurance'); ?>
		<?php echo $form->error($model,'medical_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'补扣社保公积金款'); ?>
		<?php echo $form->textField($model,'social_security_cpf'); ?>
		<?php echo $form->error($model,'social_security_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'考勤等扣薪金额'); ?>
		<?php echo $form->textField($model,'checking_in'); ?>
		<?php echo $form->error($model,'checking_in'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->