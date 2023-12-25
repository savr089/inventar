<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\InventSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="invent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hostname') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'ipaddr') ?>

    <?= $form->field($model, 'macaddr') ?>

    <?php // echo $form->field($model, 'platform') ?>

    <?php // echo $form->field($model, 'motherboard') ?>

    <?php // echo $form->field($model, 'opmemory') ?>

    <?php // echo $form->field($model, 'hard') ?>

    <?php // echo $form->field($model, 'cpu') ?>

    <?php // echo $form->field($model, 'os') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
