<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ClassPrefects]].
 *
 * @see ClassPrefects
 */
class ClassPrefectsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ClassPrefects[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ClassPrefects|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
