<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Schools]].
 *
 * @see Schools
 */
class SchoolsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Schools[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Schools|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
