<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Invent $model */

$this->title = 'Create Invent';
$this->params['breadcrumbs'][] = ['label' => 'Invents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
