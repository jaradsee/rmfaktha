<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RiskAddDep;

/**
 * RiskAddDepSearch represents the model behind the search form about `frontend\models\RiskAddDep`.
 */
class RiskAddDepSearch extends RiskAddDep
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dep_id'], 'integer'],
            [['risk_id', 'dep_name'], 'safe'],
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
        $query = RiskAddDep::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'dep_id' => $this->dep_id,
        ]);

        $query->andFilterWhere(['like', 'risk_id', $this->risk_id])
            ->andFilterWhere(['like', 'dep_name', $this->dep_name]);

        return $dataProvider;
    }
}
