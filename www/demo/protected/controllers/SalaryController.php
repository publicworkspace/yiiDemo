<?php

class SalaryController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		//$sql = "SELECT * ,(`base_pay` + `job_subsidies` + `bonus` + `repair_diff`+`subsidy_tel`+`subsidy_traffic`+`subsidy_meal`+`subsidy_computer`+`repair_subsidy`+`repair_cpf`) AS `total` FROM `tbl_salary` WHERE `id`=:id";
		//$result = Yii::app()->db->createCommand($sql);
		//$model = $result->queryAll();
		//$model=Post::model()->findBySql($sql,array(':id'=>$id));
		$model=Salary::model()->findByPk($id);
		$model->salary_month = str_replace("-","年",$model->salary_month);
		//工资与奖金
		$base = $model->base_pay + $model->job_subsidies + $model->bonus + $model->repair_diff;
		//补助
		$subsidy = $model->subsidy_tel + $model->subsidy_traffic + $model->subsidy_meal + $model->subsidy_computer + $model->repair_subsidy + $model->repair_cpf;
		$subsidy_1 = $model->subsidy_tel * 0.2 + $model->subsidy_traffic * 0.3 + $model->subsidy_meal + $model->subsidy_computer + $model->repair_subsidy + $model->repair_cpf;

		//扣款
		$deduct = $model->loan + $model->special_cpf + $model->old_age_insurance + $model->cpf + $model->unemployment_insurance
			+ $model->medical_insurance + $model->social_security_cpf + $model->checking_in;

		//应发金额
		$model->total = $base + $subsidy;
		//应纳税所得额
		if( $model->total == 0 )
		{
			$model->after_tax = 0;
		}else{
			$model->after_tax = $base + $subsidy_1 - $deduct - 3500;
		}

		//个人所得税
		if($model->after_tax == 0){
			$model->income_tax = 0;
		}else{
			$model->income_tax = $this->incomeTax($model->after_tax);
		}

		//实发金额
		if( $model->total == 0 ){
			$model->actual = 0;
		}else{
			$model->actual = $model->total - $deduct - $model->income_tax;
		}

		//$model = Salary::model()->findBySql($sql,array(':id'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		$this->render('view',array(
			'model'=>$model,
		));
		//return $model;
		//$this->render('view',array(
		//	'model'=>$this->loadModel($id),
		//));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Salary;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Salary']))
		{
			$model->attributes=$_POST['Salary'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Salary']))
		{
			$model->attributes=$_POST['Salary'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Salary');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Salary('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Salary']))
			$model->attributes=$_GET['Salary'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Salary the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Salary::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Salary $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='salary-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function incomeTax($money)
	{
		if($money <= 1500)
			return $money * 0.03;
		elseif($money > 1500 && $money <= 4500)
			return $money * 0.1 - 105;
		elseif($money > 4500 && $money <= 9000)
			return $money * 0.2 - 555;
		elseif($money > 9000 && $money <= 35000)
			return $money * 0.25 - 1005;
		elseif($money > 35000 && $money <= 55000)
			return $money * 0.3 - 2755;
		elseif($money > 55000 && $money <= 80000)
			return $money * 0.35 - 5505;
		elseif($money > 80000)
			return $money * 0.45 - 13505;
	}
}
