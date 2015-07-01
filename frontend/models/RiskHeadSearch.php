<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RiskHead;

/**
 * RiskHeadSearch represents the model behind the search form about `frontend\models\RiskHead`.
 */
class RiskHeadSearch extends RiskHead
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['risk_id', 'risk_date', 'risk_time', 'risk_miss', 'risk_event', 'risk_safety', 'risk_outcome_pt', 'risk_outcome_guest', 'risk_outcome_staff', 'risk_solve_begin', 'risk_sum_solve', 'risk_level', 'risk_head_department', 'risk_status', 'risk_program_text', 'login_name', 'risk_sum_dep', 'date_input', 'last_update', 'last_staff', 'print_url', 'act_st', 'pic'], 'safe'],
            [['risk_department', 'risk_program_head', 'risk_program_detail', 'risk_simple', 'clinictype'], 'integer'],
            [['risk_outcome_price'], 'number'],
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
        $query = RiskHead::find();

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
            'risk_date' => $this->risk_date,
            'risk_department' => $this->risk_department,
            'risk_outcome_price' => $this->risk_outcome_price,
            'risk_program_head' => $this->risk_program_head,
            'risk_program_detail' => $this->risk_program_detail,
            'risk_simple' => $this->risk_simple,
            'date_input' => $this->date_input,
            'last_update' => $this->last_update,
            'clinictype' => $this->clinictype,
        ]);

        $query->andFilterWhere(['like', 'risk_id', $this->risk_id])
            ->andFilterWhere(['like', 'risk_time', $this->risk_time])
            ->andFilterWhere(['like', 'risk_miss', $this->risk_miss])
            ->andFilterWhere(['like', 'risk_event', $this->risk_event])
            ->andFilterWhere(['like', 'risk_safety', $this->risk_safety])
            ->andFilterWhere(['like', 'risk_outcome_pt', $this->risk_outcome_pt])
            ->andFilterWhere(['like', 'risk_outcome_guest', $this->risk_outcome_guest])
            ->andFilterWhere(['like', 'risk_outcome_staff', $this->risk_outcome_staff])
            ->andFilterWhere(['like', 'risk_solve_begin', $this->risk_solve_begin])
            ->andFilterWhere(['like', 'risk_sum_solve', $this->risk_sum_solve])
            ->andFilterWhere(['like', 'risk_level', $this->risk_level])
            ->andFilterWhere(['like', 'risk_head_department', $this->risk_head_department])
            ->andFilterWhere(['like', 'risk_status', $this->risk_status])
            ->andFilterWhere(['like', 'risk_program_text', $this->risk_program_text])
            ->andFilterWhere(['like', 'login_name', $this->login_name])
            ->andFilterWhere(['like', 'risk_sum_dep', $this->risk_sum_dep])
            ->andFilterWhere(['like', 'last_staff', $this->last_staff])
            ->andFilterWhere(['like', 'print_url', $this->print_url])
            ->andFilterWhere(['like', 'act_st', $this->act_st])
            ->andFilterWhere(['like', 'pic', $this->pic]);

        return $dataProvider;
    }
}
