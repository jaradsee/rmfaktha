<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RiskAddDepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Risk Add Deps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk-add-dep-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Risk Add Dep', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'risk_id',
            'dep_id',
            'dep_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
