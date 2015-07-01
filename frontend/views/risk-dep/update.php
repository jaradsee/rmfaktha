<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiskDep */

$this->title = 'Update Risk Dep: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Risk Deps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="risk-dep-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
