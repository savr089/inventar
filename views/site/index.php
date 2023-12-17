<?php

/** @var yii\web\View $this */

use yii\bootstrap4\Modal;

$this->title = 'Comps';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Учет компьютеров</h1>

        <p class="lead">Программа учета компьютеров компании</p>

        <?php
        Modal::begin([
            'toggleButton' => [
                'label' => 'Описание',
                'class' => 'btn btn-lg btn-success'
            ],
            'title' => 'Краткое описание',
        ]);

        echo 'Привет';

        Modal::end();
        ?>
    </div>

</div>
