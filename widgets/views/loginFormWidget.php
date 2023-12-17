<?php

use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

Modal::begin([
    'title' => 'Авторизация',
    'id' => 'login-modal',
]);
?>

    <p>Пожалуйста введите данные для авторизации:</p>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'enableAjaxValidation' => true,
    'action' => ['site/ajax-login']
]);

echo $form->field($model, 'username')->textInput()->label('Логин');
echo $form->field($model, 'password')->passwordInput()->label('Пароль');;
echo $form->field($model, 'rememberMe')->checkbox();
?>

    <div>
        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
    </div>
    <div class="form-group">
        <div class="text-right">

            <?php
            echo Html::button('Cancel', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']);
            echo Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']);
            ?>

        </div>
    </div>

<?php
ActiveForm::end();
Modal::end();