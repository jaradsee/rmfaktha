<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Risklevel */

$this->title = 'Update Risklevel: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Risklevels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->level]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="risklevel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>