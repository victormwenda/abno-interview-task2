<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property integer $school_id
 * @property string $school_name
 * @property string $create_time
 * @property string $last_modified
 * @property integer $trashed
 *
 * @property Classes $classes
 */
class Schools extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_name'], 'required'],
            [['create_time', 'last_modified'], 'safe'],
            [['trashed'], 'integer'],
            [['school_name'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_id' => 'School ID',
            'school_name' => 'School Name',
            'create_time' => 'Create Time',
            'last_modified' => 'Last Modified',
            'trashed' => 'Trashed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasOne(Classes::className(), ['school_id' => 'school_id']);
    }

    /**
     * @inheritdoc
     * @return SchoolsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SchoolsQuery(get_called_class());
    }
}
