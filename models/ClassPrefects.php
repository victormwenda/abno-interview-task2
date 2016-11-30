<?php

namespace app\models;

use Yii;
use app\database\DbWorker;

/**
 * This is the model class for table "class_prefects".
 *
 * @property integer $student_id
 * @property string $role_start_date
 * @property string $role_end_date
 * @property integer $trashed
 *
 * @property Students $student
 */
class ClassPrefects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_prefects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_start_date', 'role_end_date'], 'safe'],
            [['trashed'], 'integer'],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Students::className(), 'targetAttribute' => ['student_id' => 'student_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'role_start_date' => 'Role Start Date',
            'role_end_date' => 'Role End Date',
            'trashed' => 'Trashed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Students::className(), ['student_id' => 'student_id']);
    }

    /**
     * @inheritdoc
     * @return ClassPrefectsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClassPrefectsQuery(get_called_class());
    }

    public function getClassPrefect()
    {
        return (new DbWorker())->getClassPrefectInfo($this->student_id);
    }
}
