<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\FakthaRiskSimple */

$this->title = 'Create Faktha Risk Simple';
$this->params['breadcrumbs'][] = ['label' => 'Faktha Risk Simples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faktha-risk-simple-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
