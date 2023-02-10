<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dead".
 *
 * @property string $d_time
 * @property int $de_num
 * @property int $dw_num
 */
class Dead extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dead';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['d_time', 'de_num', 'dw_num'], 'required'],
            [['d_time'], 'safe'],
            [['de_num', 'dw_num'], 'integer'],
            [['d_time'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'd_time' => 'D Time',
            'de_num' => 'De Num',
            'dw_num' => 'Dw Num',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DeadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DeadQuery(get_called_class());
    }
}
