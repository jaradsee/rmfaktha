<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RiskClinictype */

$this->title = 'Create Risk Clinictype';
$this->params['breadcrumbs'][] = ['label' => 'Risk Clinictypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk-clinictype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
