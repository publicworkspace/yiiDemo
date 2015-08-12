<?php
/* @var $this SalaryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salaries',
);

$this->menu=array(
	array('label'=>'Create Salary', 'url'=>array('create')),
	array('label'=>'Manage Salary', 'url'=>array('admin')),
);
?>

<h1>Salaries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
