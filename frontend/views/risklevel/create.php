<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Risklevel */

$this->title = 'Create Risklevel';
$this->params['breadcrumbs'][] = ['label' => 'Risklevels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risklevel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
