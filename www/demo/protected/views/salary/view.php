<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'Salaries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Salary', 'url'=>array('index')),
	array('label'=>'Create Salary', 'url'=>array('create')),
	array('label'=>'Update Salary', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Salary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salary', 'url'=>array('admin')),
);
?>

<h1>View Salary #<?php echo $model->id; ?></h1>

<table>
	<tr>
		<td><?php echo CHtml::encode($model->getAttributeLabel('job_no')); ?></td>
		<td>
			<?php echo CHtml::encode($model->job_no); ?>
		</td>
		<td><?php echo CHtml::encode($model->getAttributeLabel('username')); ?></td>
		<td>
			<?php echo CHtml::encode($model->username); ?>
		</td>
	</tr>
	<tr><td colspan="4" class="title">①工资与奖金</td></tr>
	<tr>
		<td><?php echo CHtml::encode($model->getAttributeLabel('base_pay')); ?></td>
		<td>
			<?php echo CHtml::encode($model->base_pay); ?>
		</td>
		<td><?php echo CHtml::encode($model->getAttributeLabel('job_subsidies')); ?></td>
		<td>
			<?php echo CHtml::encode($model->job_subsidies); ?>
		</td>
	</tr>
	<tr>
		<td><?php echo CHtml::encode($model->getAttributeLabel('bonus')); ?></td>
		<td>
			<?php echo CHtml::encode($model->bonus); ?>
		</td>
		<td><?php echo CHtml::encode($model->getAttributeLabel('repair_diff')); ?></td>
		<td>
			<?php echo CHtml::encode($model->repair_diff); ?>
		</td>
	</tr>
	<tr><td colspan="4" class="title">②补助项目</td></tr>
	<tr>
		<td><?php echo CHtml::encode($model->getAttributeLabel('subsidy_tel')); ?></td>
		<td>
			<?php echo CHtml::encode($model->subsidy_tel); ?>
		</td>
		<td><?php echo CHtml::encode($model->getAttributeLabel('subsidy_traffic')); ?></td>
		<td>
			<?php echo CHtml::encode($model->subsidy_traffic); ?>
		</td>
	</tr>
	<tr>
		<td><?php echo CHtml::encode($model->getAttributeLabel('subsidy_meal')); ?></td>
		<td>
			<?php echo CHtml::encode($model->subsidy_meal); ?>
		</td>
		<td><?php echo CHtml::encode($model->getAttributeLabel('subsidy_computer')); ?></td>
		<td>
			<?php echo CHtml::encode($model->subsidy_computer); ?>
		</td>
	</tr>
	<tr>
		<td><?php echo CHtml::encode($model->getAttributeLabel('repair_subsidy')); ?></td>
		<td>
			<?php echo CHtml::encode($model->repair_subsidy); ?>
		</td>
		<td><?php echo CHtml::encode($model->getAttributeLabel('repair_cpf')); ?></td>
		<td>
			<?php echo CHtml::encode($model->repair_cpf); ?>
		</td>
	</tr>
	<tr><td colspan="4" class="title">③扣款项目</td></tr>
	<tr>
		<td><?php echo CHtml::encode($model->getAttributeLabel('loan')); ?></td>
		<td>
			<?php echo CHtml::encode($model->loan); ?>
		</td>
		<td><?php echo CHtml::encode($model->getAttributeLabel('special_cpf')); ?></td>
		<td>
			<?php echo CHtml::encode($model->special_cpf); ?>
		</td>
	</tr>
	<tr>
		<td><?php echo CHtml::encode($model->getAttributeLabel('old_age_insurance')); ?></td>
		<td>
			<?php echo CHtml::encode($model->old_age_insurance); ?>
		</td>
		<td><?php echo CHtml::encode($model->getAttributeLabel('cpf')); ?></td>
		<td>
			<?php echo CHtml::encode($model->cpf); ?>
		</td>
	</tr>
	<tr>
		<td><?php echo CHtml::encode($model->getAttributeLabel('unemployment_insurance')); ?></td>
		<td>
			<?php echo CHtml::encode($model->unemployment_insurance); ?>
		</td>
		<td><?php echo CHtml::encode($model->getAttributeLabel('medical_insurance')); ?></td>
		<td>
			<?php echo CHtml::encode($model->medical_insurance); ?>
		</td>
	</tr>
	<tr>
		<td><?php echo CHtml::encode($model->getAttributeLabel('social_security_cpf')); ?></td>
		<td>
			<?php echo CHtml::encode($model->social_security_cpf); ?>
		</td>
		<td><?php echo CHtml::encode($model->getAttributeLabel('checking_in')); ?></td>
		<td>
			<?php echo CHtml::encode($model->checking_in); ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="title"><?php echo CHtml::encode($model->getAttributeLabel('total')); ?></td>
		<td colspan="2" class="title"><?php echo CHtml::encode($model->getAttributeLabel('after_tax')); ?></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo CHtml::encode($model->total); ?></td>
		<td colspan="2"><?php echo CHtml::encode($model->after_tax); ?></td>
	</tr>
	<tr>
		<td colspan="2" class="title"><?php echo CHtml::encode($model->getAttributeLabel('income_tax')); ?></td>
		<td colspan="2" class="title"><?php echo CHtml::encode($model->getAttributeLabel('actual')); ?></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo CHtml::encode($model->income_tax); ?></td>
		<td colspan="2"><?php echo CHtml::encode($model->actual); ?></td>
	</tr>
</table>

<?php
/*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'salary_month',
		'job_no',
		'username',
		'base_pay',
		'job_subsidies',
		'bonus',
		'repair_diff',
		'subsidy_tel',
		'subsidy_traffic',
		'subsidy_meal',
		'subsidy_computer',
		'repair_subsidy',
		'repair_cpf',
		'loan',
		'special_cpf',
		'old_age_insurance',
		'cpf',
		'unemployment_insurance',
		'medical_insurance',
		'social_security_cpf',
		'checking_in',
	),
)); */?>
