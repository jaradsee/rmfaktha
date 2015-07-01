<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiskHead */

$this->title = $model->risk_id;
$this->params['breadcrumbs'][] = ['label' => 'Risk Heads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk-head-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->risk_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->risk_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'risk_id',
            'risk_date',
            'risk_time',
            'risk_department',
            'risk_miss',
            'risk_event',
            'risk_safety',
            'risk_outcome_pt',
            'risk_outcome_guest',
            'risk_outcome_staff',
            'risk_outcome_price',
            'risk_solve_begin',
            'risk_sum_solve',
            'risk_level',
            'risk_head_department',
            'risk_status',
            'risk_program_head',
            'risk_program_detail',
            'risk_program_text',
            'login_name',
            'risk_sum_dep',
            'risk_simple',
            'date_input',
            'last_update',
            'last_staff',
            'print_url:url',
            'act_st',
            'pic',
            'clinictype',
        ],
    ]) ?>

</div>
