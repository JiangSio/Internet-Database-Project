<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%np_article}}".
 *
 * @property int $aid 自增列
 * @property string $title 标题
 * @property string $content 内容
 * @property int $status 状态
 */
class NpArticle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%np_article}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'status'], 'required'],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['content'], 'string', 'max' => 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aid' => '自增列',
            'title' => '标题',
            'content' => '内容',
            'status' => '状态',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NpArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NpArticleQuery(get_called_class());
    }
}
