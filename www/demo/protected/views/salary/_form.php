<?php
/* @var $this SalaryController */
/* @var $model Salary */
/* @var $form CActiveForm */
?>

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

	<table>
		<tr>
			<td><?php echo
				//$form->labelEx($model,Yii::t('salary_message','salary_month'));
				$form->labelEx($model,'salary_month');
				?></td>
			<td colspan="3">
				<?php
				$this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'model'=>$model,
					'language'=>'zh_cn',
					'name'=>'salary_month',
					'attribute'=>'salary_month',
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
						//'maxlength'=>8,
						'readonly'=>"readonly",
					),
				));
				?>
				<?php echo $form->error($model,'salary_month'); ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'job_no'); ?></td>
			<td>
				<?php echo $form->textField($model,'job_no',array('size'=>10,'maxlength'=>10)); ?>
				<?php echo $form->error($model,'job_no'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'username'); ?></td>
			<td>
				<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'username'); ?>
			</td>
		</tr>
		<tr><td colspan="4" class="title">①工资与奖金</td></tr>
		<tr>
			<td><?php echo $form->labelEx($model,'base_pay'); ?></td>
			<td>
				<?php echo $form->textField($model,'base_pay'); ?>
				<?php echo $form->error($model,'base_pay'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'job_subsidies'); ?></td>
			<td>
				<?php echo $form->textField($model,'job_subsidies'); ?>
				<?php echo $form->error($model,'job_subsidies'); ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'bonus'); ?></td>
			<td>
				<?php echo $form->textField($model,'bonus'); ?>
				<?php echo $form->error($model,'bonus'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'repair_diff'); ?></td>
			<td>
				<?php echo $form->textField($model,'repair_diff'); ?>
				<?php echo $form->error($model,'repair_diff'); ?>
			</td>
		</tr>
		<tr><td colspan="4" class="title">②补助项目</td></tr>
		<tr>
			<td><?php echo $form->labelEx($model,'subsidy_tel'); ?></td>
			<td>
				<?php echo $form->textField($model,'subsidy_tel'); ?>
				<?php echo $form->error($model,'subsidy_tel'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'subsidy_traffic'); ?></td>
			<td>
				<?php echo $form->textField($model,'subsidy_traffic'); ?>
				<?php echo $form->error($model,'subsidy_traffic'); ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'subsidy_meal'); ?></td>
			<td>
				<?php echo $form->textField($model,'subsidy_meal'); ?>
				<?php echo $form->error($model,'subsidy_meal'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'subsidy_computer'); ?></td>
			<td>
				<?php echo $form->textField($model,'subsidy_computer'); ?>
				<?php echo $form->error($model,'subsidy_computer'); ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'repair_subsidy'); ?></td>
			<td>
				<?php echo $form->textField($model,'repair_subsidy'); ?>
				<?php echo $form->error($model,'repair_subsidy'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'repair_cpf'); ?></td>
			<td>
				<?php echo $form->textField($model,'repair_cpf'); ?>
				<?php echo $form->error($model,'repair_cpf'); ?>
			</td>
		</tr>
		<tr><td colspan="4" class="title">③扣款项目</td></tr>
		<tr>
			<td><?php echo $form->labelEx($model,'loan'); ?></td>
			<td>
				<?php echo $form->textField($model,'loan'); ?>
				<?php echo $form->error($model,'loan'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'special_cpf'); ?></td>
			<td>
				<?php echo $form->textField($model,'special_cpf'); ?>
				<?php echo $form->error($model,'special_cpf'); ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'old_age_insurance'); ?></td>
			<td>
				<?php echo $form->textField($model,'old_age_insurance'); ?>
				<?php echo $form->error($model,'old_age_insurance'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'cpf'); ?></td>
			<td>
				<?php echo $form->textField($model,'cpf'); ?>
				<?php echo $form->error($model,'cpf'); ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'unemployment_insurance'); ?></td>
			<td>
				<?php echo $form->textField($model,'unemployment_insurance'); ?>
				<?php echo $form->error($model,'unemployment_insurance'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'medical_insurance'); ?></td>
			<td>
				<?php echo $form->textField($model,'medical_insurance'); ?>
				<?php echo $form->error($model,'medical_insurance'); ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'social_security_cpf'); ?></td>
			<td>
				<?php echo $form->textField($model,'social_security_cpf'); ?>
				<?php echo $form->error($model,'social_security_cpf'); ?>
			</td>
			<td><?php echo $form->labelEx($model,'checking_in'); ?></td>
			<td>
				<?php echo $form->textField($model,'checking_in'); ?>
				<?php echo $form->error($model,'checking_in'); ?>
			</td>
		</tr>
	</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->