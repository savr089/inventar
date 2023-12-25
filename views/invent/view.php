<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Invent $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Invents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="invent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'hostname:ntext',
            'username:ntext',
            'ipaddr:ntext',
            'macaddr:ntext',
            'platform:ntext',
            'motherboard:ntext',
            'opmemory',
            'hard:ntext',
            'cpu:ntext',
            'os:ntext',
        ],
    ]) ?>

</div>
