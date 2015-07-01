<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "risk_add_dep".
 *
 * @property integer $id
 * @property string $risk_id
 * @property integer $dep_id
 * @property string $dep_name
 */
class RiskAddDep extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'risk_add_dep';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['risk_id'], 'required'],
            [['dep_id'], 'integer'],
            [['risk_id'], 'string', 'max' => 7],
            [['dep_name'], 'string', 'max' => 200],
            [['risk_id', 'dep_id'], 'unique', 'targetAttribute' => ['risk_id', 'dep_id'], 'message' => 'The combination of Risk ID and Dep ID has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'risk_id' => 'Risk ID',
            'dep_id' => 'Dep ID',
            'dep_name' => 'Dep Name',
        ];
    }
}
