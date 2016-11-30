<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property integer $student_id
 * @property integer $class_id
 * @property string $firstname
 * @property string $lastname
 * @property string $create_time
 * @property string $last_modified
 * @property integer $trashed
 *
 * @property ClassPrefects $classPrefects
 * @property Classes $class
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'firstname', 'lastname'], 'required'],
            [['class_id', 'trashed'], 'integer'],
            [['create_time', 'last_modified'], 'safe'],
            [['firstname', 'lastname'], 'string', 'max' => 128],
            [['class_id'], 'exist', 'skipOnError' => true, 'targetClass' => Classes::className(), 'targetAttribute' => ['class_id' => 'class_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'class_id' => 'Class ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'create_time' => 'Create Time',
            'last_modified' => 'Last Modified',
            'trashed' => 'Trashed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassPrefects()
    {
        return $this->hasOne(ClassPrefects::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(Classes::className(), ['class_id' => 'class_id']);
    }

    /**
     * @inheritdoc
     * @return StudentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentsQuery(get_called_class());
    }
}
