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

<?php $this->widget('zii.widgets.CDetailView', array(
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
)); ?>
