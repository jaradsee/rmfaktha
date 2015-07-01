<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProgramHeadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Program Heads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-head-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Program Head', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'head_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
