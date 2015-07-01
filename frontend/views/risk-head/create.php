<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RiskHead */

$this->title = 'Create Risk Head';
$this->params['breadcrumbs'][] = ['label' => 'Risk Heads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk-head-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
