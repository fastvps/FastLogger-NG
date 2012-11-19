<?php

/**
 * This is the model class for table "logs_netconsole".
 *
 * The followings are the available columns in table 'logs_netconsole':
 * @property string $host
 * @property string $datetime
 * @property string $msg
 */
class LogsNetconsole extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LogsNetconsole the static model class
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
		return 'logs_netconsole';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('host, datetime, msg', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('host, datetime, msg', 'safe', 'on'=>'search'),
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
			'host' => 'Host',
			'datetime' => 'Datetime',
			'msg' => 'Msg',
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

		$criteria->compare('host',$this->host,true);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('msg',$this->msg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}