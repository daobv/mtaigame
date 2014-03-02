<?php

/**
 * This is the model class for table "application".
 *
 * The followings are the available columns in table 'application':
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property double $rating
 * @property double $version
 * @property string $publisher
 * @property integer $category_id
 * @property double $size
 * @property string $requirement
 * @property integer $view
 * @property integer $download
 * @property string $date
 * @property string $link
 * @property string $content
 * @property string $url
 */
class Application extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'application';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, image, rating, version, publisher, category_id, size, requirement, view, download, date, link, content, url', 'required'),
			array('category_id, view, download', 'numerical', 'integerOnly'=>true),
			array('rating, version, size', 'numerical'),
			array('name, image, publisher, date, link, url', 'length', 'max'=>255),
			array('requirement', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, image, rating, version, publisher, category_id, size, requirement, view, download, date, link, content, url', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'image' => 'Image',
			'rating' => 'Rating',
			'version' => 'Version',
			'publisher' => 'Publisher',
			'category_id' => 'Category',
			'size' => 'Size',
			'requirement' => 'Requirement',
			'view' => 'View',
			'download' => 'Download',
			'date' => 'Date',
			'link' => 'Link',
			'content' => 'Content',
			'url' => 'Url',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('version',$this->version);
		$criteria->compare('publisher',$this->publisher,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('size',$this->size);
		$criteria->compare('requirement',$this->requirement,true);
		$criteria->compare('view',$this->view);
		$criteria->compare('download',$this->download);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Application the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
