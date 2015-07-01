<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "program_detail".
 *
 * @property integer $id
 * @property integer $head_id
 * @property string $name
 * @property integer $orderitem
 */
class ProgramDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'program_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'head_id', 'orderitem'], 'integer'],
            [['name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'head_id' => 'Head ID',
            'name' => 'Name',
            'orderitem' => 'Orderitem',
        ];
    }
}
