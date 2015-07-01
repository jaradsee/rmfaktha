<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "risk_level".
 *
 * @property string $level
 * @property string $name
 */
class RiskLevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'risk_level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level'], 'required'],
            [['level'], 'string', 'max' => 1],
            [['name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'level' => 'Level',
            'name' => 'Name',
        ];
    }
}
