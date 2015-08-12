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
			'id' => 'ID',
			'salary_month' => 'Salary Month',
			'job_no' => 'Job No',
			'username' => 'Username',
			'base_pay' => 'Base Pay',
			'job_subsidies' => 'Job Subsidies',
			'bonus' => 'Bonus',
			'repair_diff' => 'Repair Diff',
			'subsidy_tel' => 'Subsidy Tel',
			'subsidy_traffic' => 'Subsidy Traffic',
			'subsidy_meal' => 'Subsidy Meal',
			'subsidy_computer' => 'Subsidy Computer',
			'repair_subsidy' => 'Repair Subsidy',
			'repair_cpf' => 'Repair Cpf',
			'loan' => 'Loan',
			'special_cpf' => 'Special Cpf',
			'old_age_insurance' => 'Old Age Insurance',
			'cpf' => 'Cpf',
			'unemployment_insurance' => 'Unemployment Insurance',
			'medical_insurance' => 'Medical Insurance',
			'social_security_cpf' => 'Social Security Cpf',
			'checking_in' => 'Checking In',
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
