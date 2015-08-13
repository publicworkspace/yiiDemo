<?php

/**
 * This is the model class for table "tbl_salary".
 *
 * The followings are the available columns in table 'tbl_salary':
 * @property integer $id
 * @property string $salary_month
 * @property string $job_no
 * @property string $username
 * @property double $base_pay
 * @property double $job_subsidies
 * @property double $bonus
 * @property double $repair_diff
 * @property double $subsidy_tel
 * @property double $subsidy_traffic
 * @property double $subsidy_meal
 * @property double $subsidy_computer
 * @property double $repair_subsidy
 * @property double $repair_cpf
 * @property double $loan
 * @property double $special_cpf
 * @property double $old_age_insurance
 * @property double $cpf
 * @property double $unemployment_insurance
 * @property double $medical_insurance
 * @property double $social_security_cpf
 * @property double $checking_in
 */
class Salary extends CActiveRecord
{
	public $total; //应发金额
	public $after_tax;//应纳税所得额
	public $income_tax;//扣个人所得税
	public $actual;//实发金额
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_salary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('salary_month, job_no, username', 'required'),
			array('base_pay, job_subsidies, bonus, repair_diff, subsidy_tel, subsidy_traffic, subsidy_meal, subsidy_computer, repair_subsidy, repair_cpf, loan, special_cpf, old_age_insurance, cpf, unemployment_insurance, medical_insurance, social_security_cpf, checking_in', 'numerical'),
			array('job_no', 'length', 'max'=>10),
			array('username', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, salary_month, job_no, username, base_pay, job_subsidies, bonus, repair_diff, subsidy_tel, subsidy_traffic, subsidy_meal, subsidy_computer, repair_subsidy, repair_cpf, loan, special_cpf, old_age_insurance, cpf, unemployment_insurance, medical_insurance, social_security_cpf, checking_in', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '主键',
			'salary_month' => '月份',
			'job_no' => '工号',
			'username' => '姓名',
			'base_pay' => '基本工资',
			'job_subsidies' => '岗位津贴',
			'bonus' => '奖金',
			'repair_diff' => '补以前月份差异',
			'subsidy_tel' => '电话补',
			'subsidy_traffic' => '交通补',
			'subsidy_meal' => '餐补',
			'subsidy_computer' => '电脑补',
			'repair_subsidy' => '补以前月份补贴',
			'repair_cpf' => '补多扣公积金',
			'loan' => '扣房租及个人借款',
			'special_cpf' => '扣特殊公积金',
			'old_age_insurance' => '扣养老保险',
			'cpf' => '扣公积金',
			'unemployment_insurance' => '扣失业保险',
			'medical_insurance' => '扣医疗保险',
			'social_security_cpf' => '补扣社保公积金款',
			'checking_in' => '考勤等扣款金额',
			'total' => '④应发金额',
			'after_tax' => '⑤应纳税所得额',
			'income_tax' => '⑥扣个人所得税',
			'actual' => '⑦实发金额',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('salary_month',$this->salary_month,true);
		$criteria->compare('job_no',$this->job_no,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('base_pay',$this->base_pay);
		$criteria->compare('job_subsidies',$this->job_subsidies);
		$criteria->compare('bonus',$this->bonus);
		$criteria->compare('repair_diff',$this->repair_diff);
		$criteria->compare('subsidy_tel',$this->subsidy_tel);
		$criteria->compare('subsidy_traffic',$this->subsidy_traffic);
		$criteria->compare('subsidy_meal',$this->subsidy_meal);
		$criteria->compare('subsidy_computer',$this->subsidy_computer);
		$criteria->compare('repair_subsidy',$this->repair_subsidy);
		$criteria->compare('repair_cpf',$this->repair_cpf);
		$criteria->compare('loan',$this->loan);
		$criteria->compare('special_cpf',$this->special_cpf);
		$criteria->compare('old_age_insurance',$this->old_age_insurance);
		$criteria->compare('cpf',$this->cpf);
		$criteria->compare('unemployment_insurance',$this->unemployment_insurance);
		$criteria->compare('medical_insurance',$this->medical_insurance);
		$criteria->compare('social_security_cpf',$this->social_security_cpf);
		$criteria->compare('checking_in',$this->checking_in);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salary the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
