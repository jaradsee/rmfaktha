<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\FakthaRiskStatus */

$this->title = 'Update Faktha Risk Status: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Faktha Risk Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="faktha-risk-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
