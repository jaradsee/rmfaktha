<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiskHeadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="risk-head-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'risk_id') ?>

    <?= $form->field($model, 'risk_date') ?>

    <?= $form->field($model, 'risk_time') ?>

    <?= $form->field($model, 'risk_department') ?>

    <?= $form->field($model, 'risk_miss') ?>

    <?php // echo $form->field($model, 'risk_event') ?>

    <?php // echo $form->field($model, 'risk_safety') ?>

    <?php // echo $form->field($model, 'risk_outcome_pt') ?>

    <?php // echo $form->field($model, 'risk_outcome_guest') ?>

    <?php // echo $form->field($model, 'risk_outcome_staff') ?>

    <?php // echo $form->field($model, 'risk_outcome_price') ?>

    <?php // echo $form->field($model, 'risk_solve_begin') ?>

    <?php // echo $form->field($model, 'risk_sum_solve') ?>

    <?php // echo $form->field($model, 'risk_level') ?>

    <?php // echo $form->field($model, 'risk_head_department') ?>

    <?php // echo $form->field($model, 'risk_status') ?>

    <?php // echo $form->field($model, 'risk_program_head') ?>

    <?php // echo $form->field($model, 'risk_program_detail') ?>

    <?php // echo $form->field($model, 'risk_program_text') ?>

    <?php // echo $form->field($model, 'login_name') ?>

    <?php // echo $form->field($model, 'risk_sum_dep') ?>

    <?php // echo $form->field($model, 'risk_simple') ?>

    <?php // echo $form->field($model, 'date_input') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'last_staff') ?>

    <?php // echo $form->field($model, 'print_url') ?>

    <?php // echo $form->field($model, 'act_st') ?>

    <?php // echo $form->field($model, 'pic') ?>

    <?php // echo $form->field($model, 'clinictype') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
