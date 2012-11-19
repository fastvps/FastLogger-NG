<?php

/**
 * This is the model class for table "logs_syslog_ng".
 *
 * The followings are the available columns in table 'logs_syslog_ng':
 * @property string $host
 * @property string $facility
 * @property string $priority
 * @property string $level
 * @property string $tag
 * @property string $program
 * @property string $msg
 * @property string $inserted_at
 */
class LogsSyslogNg extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LogsSyslogNg the static model class
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
		return 'logs_syslog_ng';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('inserted_at', 'required'),
			array('host, facility, priority, level, tag, program, msg', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('host, facility, priority, level, tag, program, msg, inserted_at', 'safe', 'on'=>'search'),
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
			'facility' => 'Facility',
			'priority' => 'Priority',
			'level' => 'Level',
			'tag' => 'Tag',
			'program' => 'Program',
			'msg' => 'Msg',
			'inserted_at' => 'Inserted At',
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
		$criteria->compare('facility',$this->facility,true);
		$criteria->compare('priority',$this->priority,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('program',$this->program,true);
		$criteria->compare('msg',$this->msg,true);
		$criteria->compare('inserted_at',$this->inserted_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}