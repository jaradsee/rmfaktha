<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiskAddDep */

$this->title = 'Update Risk Add Dep: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Risk Add Deps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="risk-add-dep-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
