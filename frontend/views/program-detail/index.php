<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProgramDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Program Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Program Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'head_id',
            'name',
            'orderitem',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
