<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Dead]].
 *
 * @see Dead
 */
class DeadQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Dead[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Dead|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
