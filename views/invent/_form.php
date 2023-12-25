<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Invent $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="invent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hostname')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'username')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ipaddr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'macaddr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'platform')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'motherboard')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'opmemory')->textInput() ?>

    <?= $form->field($model, 'hard')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cpu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'os')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
