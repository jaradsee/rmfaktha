<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ProgramHead */

$this->title = 'Create Program Head';
$this->params['breadcrumbs'][] = ['label' => 'Program Heads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-head-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
