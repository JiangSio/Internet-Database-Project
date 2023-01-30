<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[NpArticle]].
 *
 * @see NpArticle
 */
class NpArticleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NpArticle[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NpArticle|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
