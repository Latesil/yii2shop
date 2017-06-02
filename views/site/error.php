<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="container text-center">
    
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="container">
        <div class="alert alert-danger">
            <?= nl2br(Html::encode($message)) ?>
        </div>
    </div>
        <div class="logo-404">
                <a href="<?= \yii\helpers\Url::home() ?>"><?= Html::img('@web/images/home/logo.png', ['alt' => 'E-SHOPPER']) ?></a>
        </div>
        <div class="content-404">
                <img src="/yii2shop/images/404/404.png" class="img-responsive" alt="" />
        </div>
</div>