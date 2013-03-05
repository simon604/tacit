<?php

/**
 * This is the model class for table "tbl_profile".
 *
 * The followings are the available columns in table 'tbl_profile':
 * @property integer $user_id
 * @property string $lastname
 * @property string $firstname
 * @property string $location
 * @property integer $role
 * @property string $share_expertise
 * @property string $share_expertise_description
 * @property string $learn_expertise
 * @property string $learn_expertise_description
 * @property string $image_path
 */
class Profile extends CActiveRecord
{

	const ROLE_YOUNG=0;
	const ROLE_OLD=1;

	const LOCATION_VANCOUVER = 0;
	const LOCATION_BURNABY = 1;
	const LOCATION_SURREY = 2;
	const LOCATION_RICHMOND = 3;
	const LOCATION_COQUITLAM = 4;
	const LOCATION_NORTH_VANCOUVER = 5;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Profile the static model class
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
		return 'tbl_profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, firstname, lastname, location, role', 'required'),
			array('user_id, role', 'numerical', 'integerOnly'=>true),
			array('lastname, firstname, location', 'length', 'max'=>50),
			array('share_expertise, image_path', 'length', 'max'=>256),
			array('share_expertise_description, learn_expertise, learn_expertise_description', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, lastname, firstname, location, role, share_expertise, share_expertise_description, learn_expertise, learn_expertise_description', 'safe', 'on'=>'search'),
			array('image_path', 'file', 'allowEmpty' => true, 'types'=>'jpg, gif, png, jpeg'),
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
			'user_id' => 'User',
			'lastname' => 'Lastname',
			'firstname' => 'Firstname',
			'location' => 'Location',
			'role' => 'Role',
			'share_expertise' => 'What expertise would you like to share?',
			'share_expertise_description' => 'Tell us your story about your talent!',
			'learn_expertise' => 'What expertise would you like to learn?',
			'learn_expertise_description' => 'What are some passions you want to learn more about?',
			'image_path' => 'Your Profile Image',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('role',$this->role);
		$criteria->compare('share_expertise',$this->share_expertise,true);
		$criteria->compare('share_expertise_description',$this->share_expertise_description,true);
		$criteria->compare('learn_expertise',$this->learn_expertise,true);
		$criteria->compare('learn_expertise_description',$this->learn_expertise_description,true);
		$criteria->compare('image_path',$this->image_path,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getRoleOptions()
   	{
	    return array(
			self::ROLE_YOUNG=>'I AM YOUNG',
			self::ROLE_OLD=>'I AM OLD'
		); 
 	}

 	public function getLocationOptions()
   	{
	    return array(
			self::LOCATION_VANCOUVER=>'Vancouver',
			self::LOCATION_BURNABY=>'Burnaby',
			self::LOCATION_SURREY=>'Surrey',
			self::LOCATION_RICHMOND=>'Richmond',
			self::LOCATION_NORTH_VANCOUVER=>'North Vancouver',
			self::LOCATION_COQUITLAM=>'Coquitlam'
		); 
 	}

 	/**
      * @return string the status text display for the current issue
      */
     public function getLocationText()
     {
		$locationOptions=$this->getLocationOptions();
		
		return isset($locationOptions[$this->location]) ?
			$locationOptions[$this->location] : "unknown status ({$this->location})";
	}
}