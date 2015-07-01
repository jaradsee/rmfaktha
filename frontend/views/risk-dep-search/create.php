<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RiskDep */

$this->title = 'Create Risk Dep';
$this->params['breadcrumbs'][] = ['label' => 'Risk Deps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk-dep-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
