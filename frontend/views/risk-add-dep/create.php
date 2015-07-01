<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RiskAddDep */

$this->title = 'Create Risk Add Dep';
$this->params['breadcrumbs'][] = ['label' => 'Risk Add Deps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk-add-dep-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
