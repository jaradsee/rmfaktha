<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RiskHeadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Risk Heads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk-head-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Risk Head', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'risk_id',
            'risk_date',
            'risk_time',
            'risk_department',
            'risk_miss',
            // 'risk_event',
            // 'risk_safety',
            // 'risk_outcome_pt',
            // 'risk_outcome_guest',
            // 'risk_outcome_staff',
            // 'risk_outcome_price',
            // 'risk_solve_begin',
            // 'risk_sum_solve',
            // 'risk_level',
            // 'risk_head_department',
            // 'risk_status',
            // 'risk_program_head',
            // 'risk_program_detail',
            // 'risk_program_text',
            // 'login_name',
            // 'risk_sum_dep',
            // 'risk_simple',
            // 'date_input',
            // 'last_update',
            // 'last_staff',
            // 'print_url:url',
            // 'act_st',
            // 'pic',
            // 'clinictype',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
