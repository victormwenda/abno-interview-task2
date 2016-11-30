<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classes".
 *
 * @property integer $school_id
 * @property integer $class_id
 * @property string $class_name
 * @property string $create_time
 * @property string $last_modified
 * @property integer $trashed
 *
 * @property Schools $school
 * @property Students[] $students
 */
class Classes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id', 'class_name'], 'required'],
            [['school_id', 'trashed'], 'integer'],
            [['create_time', 'last_modified'], 'safe'],
            [['class_name'], 'string', 'max' => 128],
            [['school_id'], 'unique'],
            [['school_id'], 'exist', 'skipOnError' => true, 'targetClass' => Schools::className(), 'targetAttribute' => ['school_id' => 'school_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_id' => 'School ID',
            'class_id' => 'Class ID',
            'class_name' => 'Class Name',
            'create_time' => 'Create Time',
            'last_modified' => 'Last Modified',
            'trashed' => 'Trashed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(Schools::className(), ['school_id' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['class_id' => 'class_id']);
    }

    /**
     * @inheritdoc
     * @return ClassesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClassesQuery(get_called_class());
    }
}
