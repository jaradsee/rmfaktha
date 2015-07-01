<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "risk_dep".
 *
 * @property integer $id
 * @property string $name
 * @property string $fullname
 * @property string $type
 * @property string $password
 * @property string $level
 */
class RiskDep extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'risk_dep';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name', 'fullname', 'password'], 'string', 'max' => 200],
            [['type', 'level'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'fullname' => 'Fullname',
            'type' => 'Type',
            'password' => 'Password',
            'level' => 'Level',
        ];
    }
}
