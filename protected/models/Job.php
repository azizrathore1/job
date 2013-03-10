<?php

/**
 * This is the model class for table "job".
 *
 * The followings are the available columns in table 'job':
 * @property string $job_id
 * @property integer $job_reference
 * @property string $job_title
 * @property string $job_description
 * @property string $published_date
 * @property string $expiry_date
 * @property string $country
 * @property string $region
 * @property string $apply_date
 * @property string $catogeory
 * @property string $job_ad_website
 */
class Job extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Job the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'job';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('job_reference, job_title, job_description, published_date, country, region, catogeory, job_ad_website', 'required'),
			array('job_reference', 'numerical', 'integerOnly'=>true),
			array('job_title, catogeory', 'length', 'max'=>30),
			array('job_description', 'length', 'max'=>50000),
			array('country, region', 'length', 'max'=>20),
			array('job_ad_website', 'length', 'max'=>10),
			array('expiry_date, apply_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('job_id, job_reference, job_title, job_description, published_date, expiry_date, country, region, apply_date, catogeory, job_ad_website', 'safe', 'on'=>'search'),
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
			'job_id' => 'Job',
			'job_reference' => 'Job Reference',
			'job_title' => 'Job Title',
			'job_description' => 'Job Description',
			'published_date' => 'Published Date',
			'expiry_date' => 'Expiry Date',
			'country' => 'Country',
			'region' => 'Region',
			'apply_date' => 'Apply Date',
			'catogeory' => 'Catogeory',
			'job_ad_website' => 'Job Ad Website',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('job_id',$this->job_id,true);
		$criteria->compare('job_reference',$this->job_reference);
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('job_description',$this->job_description,true);
		$criteria->compare('published_date',$this->published_date,true);
		$criteria->compare('expiry_date',$this->expiry_date,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('apply_date',$this->apply_date,true);
		$criteria->compare('catogeory',$this->catogeory,true);
		$criteria->compare('job_ad_website',$this->job_ad_website,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}