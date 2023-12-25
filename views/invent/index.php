<?php

use app\models\Invent;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\InventSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Comps';
?>
<div class="invent-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => [
            'class' => 'table'
        ],
        'columns' => [

            'hostname:ntext',
            'username:ntext',
            'ipaddr:ntext',
            'macaddr:ntext',
            //'platform:ntext',
            //'motherboard:ntext',
            //'opmemory',
            //'hard:ntext',
            //'cpu:ntext',
            //'os:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Invent $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
