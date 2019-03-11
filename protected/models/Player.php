<?php

/**
 * This is the model class for table "Player".
 *
 * The followings are the available columns in table 'Player':
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $position
 * @property string $datebirth
 * @property integer $shirtnumber
 * @property string $profileimage
 */
class Player extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Player';
    }

    private $oldProfileimage;

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('profileimage', 'file', 'allowEmpty' => true, 'types' => 'jpg, jpeg', 'message' => 'You can upload images as "JPG" or "JPEG" only.'),
            array('firstname, lastname, position', 'required'),
            array('shirtnumber', 'numerical', 'integerOnly' => true),
            array('firstname, lastname, position, profileimage', 'length', 'max' => 128),
            array('datebirth', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, firstname, lastname, position, datebirth, shirtnumber, profileimage, oldProfileimage', 'safe', 'on' => 'search'),
        );
    }

    public function afterDelete()
    {
        $this->deleteProfileImage();
        return parent::afterDelete();
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'Id',
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'position' => 'Position',
            'datebirth' => 'Date of birth',
            'shirtnumber' => 'Shirtn umber',
            'profileimage' => 'Profile image'
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
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);

        $criteria->compare('firstname', $this->firstname, true);

        $criteria->compare('lastname', $this->lastname, true);

        $criteria->compare('position', $this->position, true);

        $criteria->compare('datebirth', $this->datebirth, true);

        $criteria->compare('shirtnumber', $this->shirtnumber);

        $criteria->compare('profileimage', $this->profileimage, true);

        return new CActiveDataProvider('Player', array(
            'criteria' => $criteria,
        ));
    }

    public function afterFind()
    {
        parent::afterFind();
        $this->oldProfileimage = $this->profileimage;
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Player the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }


    private function deleteProfileImage()
    {
        $imagem = $this->profileimage;
        return unlink(Yii::app()->params['uploadPath'] . '/' . $imagem);
    }
}