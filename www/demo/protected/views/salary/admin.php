<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'Salaries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Salary', 'url'=>array('index')),
	array('label'=>'Create Salary', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salary-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Salaries</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'salary-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'salary_month',
		'job_no',
		'username',
		'base_pay',
		'job_subsidies',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
