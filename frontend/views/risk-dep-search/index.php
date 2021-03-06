<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RiskDepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Risk Deps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk-dep-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Risk Dep', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'fullname',
            'type',
            'password',
            // 'level',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
