<?php

/**
 * This is the model class for table "tbl_pages".
 *
 * The followings are the available columns in table 'tbl_pages':
 * @property integer $id
 * @property string $key
 * @property string $meta_tag
 * @property string $meta_desc
 * @property string $name
 * @property string $content
 * @property string $thumb_image
 * @property datetime $last_update
 */
class Pages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, content, last_update', 'required'),
			array('key', 'length', 'max'=>80),
			array('name', 'length', 'max'=>120),
			array('thumb_image', 'file', 'allowEmpty' => true, 'safe'=>true, 'types' => 'jpg, jpeg, gif, png'),
			array('meta_tag, meta_desc, last_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, key, meta_tag, meta_desc, name, content, thumb_image, last_update', 'safe', 'on'=>'search'),
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
			'key' => 'Key',
			'meta_tag' => 'Meta Tag',
			'meta_desc' => 'Meta Desc',
			'name' => 'Name',
			'content' => 'Content',
			'thumb_image' => 'Thumb Image',
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
		$criteria->compare('key',$this->key,true);
		$criteria->compare('meta_tag',$this->meta_tag,true);
		$criteria->compare('meta_desc',$this->meta_desc,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('thumb_image',$this->thumb_image,true);
		$criteria->compare('last_update',$this->last_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
