<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class = "main-header">
    <div class = "wrapper">
    <nav class = "main-navigation">
        <ul class = "logo-list">
            <li class = "navigation-item navigation-main-logo">
                <a href = "#" class = "navigation-item main-logo">
                    <img src = "img/svg/nerds-logo.svg" alt = "Логотип Nerd's" width = "160" height = "65">
                </a>
            </li>
        </ul>
        <ul class = "navigation-list">
            <li class = "navigation-item navigation-item-selected"><a href = "#">Студия</a></li>
            <li class = "navigation-item navigation-item-disabled"><a href = "#">Клиенты</a></li>
            <li class = "navigation-item"><a href = "catalog.html">Магазин</a></li>
            <li class = "navigation-item navigation-item-disabled"><a href = "#">Контакты</a></li>
        </ul>
        <ul class = "navigation-backet">
            <li class = "navigation-item navigation-backet-item navigation-item-disabled"><a href = "#">Корзина</a></li>
        </ul>
    </nav>
    </div>
</div>

<?= $content ?>
<script type = "text/javascript" src = "JS/Script.js"></script>
<script type = "text/javascript" src = "JS/Modal.js"></script>
<script type = "text/javascript" src = "JS/Map.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
