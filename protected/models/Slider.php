<?php

/**
 * This is the model class for table "tbl_slider".
 *
 * The followings are the available columns in table 'tbl_slider':
 * @property integer $id
 * @property string $caption
 * @property string $quotes
 * @property string $file_name
 * @property integer $active
 * @property integer $sequence
 * @property datetime $last_update
 */
class Slider extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_slider';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('file_name, active, sequence, last_update', 'required'),
			array('active, sequence', 'numerical', 'integerOnly'=>true),
			array('caption', 'length', 'max'=>100),
			array('file_name', 'file', 'allowEmpty' => false, 'safe'=>true, 'types' => 'jpg, jpeg, gif, png'),
			array('quotes', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, caption, quotes, file_name, active, sequence', 'safe', 'on'=>'search'),
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
			'caption' => 'Caption',
			'quotes' => 'Quotes',
			'file_name' => 'File Name',
			'active' => 'Active',
			'sequence' => 'Sequence',
			'last_update' => 'Last Update'
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
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('quotes',$this->quotes,true);
		$criteria->compare('file_name',$this->file_name,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('sequence',$this->sequence);
		$criteria->compare('last_update',$this->last_update);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Slider the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
