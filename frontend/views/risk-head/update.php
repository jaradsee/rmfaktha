<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiskHead */

$this->title = 'Update Risk Head: ' . ' ' . $model->risk_id;
$this->params['breadcrumbs'][] = ['label' => 'Risk Heads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->risk_id, 'url' => ['view', 'id' => $model->risk_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="risk-head-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
