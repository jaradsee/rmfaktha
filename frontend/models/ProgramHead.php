<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "program_head".
 *
 * @property integer $id
 * @property string $name
 * @property integer $head_id
 */
class ProgramHead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'program_head';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'head_id'], 'integer'],
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
            'name' => 'Name',
            'head_id' => 'Head ID',
        ];
    }
}
