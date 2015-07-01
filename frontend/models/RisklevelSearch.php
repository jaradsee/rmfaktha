<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Risklevel;

/**
 * RisklevelSearch represents the model behind the search form about `frontend\models\Risklevel`.
 */
class RisklevelSearch extends Risklevel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level', 'name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Risklevel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'level', $this->level])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
