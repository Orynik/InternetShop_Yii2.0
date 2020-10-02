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

<section class = "our-location">
    <div class = "wrapper">
        <h1 class = "visually-hidden">Контактные данные</h1>
        <div class = "address">
            <h2>NЁRDS DESIGN STUDIO</h2>
            <p>191186, Санкт-Питербург,<br>
                ул.Б. Конюшенная, д. 19/8</p>
            <p>тел. +7 (812) 275-75-75</p>
            <br>
            <button class = "modal-call button button-red">Напишите нам</button>
        </div>
    </div>
    <div id="map"></div>
</section>
<div class = "wrapper">
    <footer class = "main-footer">
        <div class = "social">
            <ul class = "social-list">
                <li class="social-item"><a class = "social-icon social-icon-vk" href="#"></a></li>
                <li class="social-item"><a class = "social-icon social-icon-fb" href="#"></a></li>
                <li class="social-item"><a class = "social-icon social-icon-inst" href="#"></a></li>
            </ul>
            <div class = "text-footer">
                <h4>Давайте дружить, это выгодно!</h4>
                <p>Скидка 10% для друзей из социальных сетей.</p>
            </div>
        </div>
    </footer>
</div>
</div>
<section class = "modal-window">
    <div class = "modal-wrapper">
        <span class="close-cross"></span>
        <h2 class = "modal-title">Напишите нам</h2>
        <form id = "modal" class = "modal-form" method = "post" action = "action.php">
            <label>Ваше имя:<br>
                <input type = "text" placeholder = "Представьтесь, пожалуйста" id = "user-name">
            </label>
            <label>Ваш e-mail:<br>
                <input type = "email" placeholder = "Для отправки ответа" id = "user-email">
            </label>
            <label>Текст письма:<br>
                <textarea placeholder = "В свободной форме" id = "user-text"></textarea>
            </label>
        </form>
        <button class = "button button-red modal-button" type = "submit" form = "modal">Отправить</button>
    </div>
</section>
<script type = "text/javascript" src = "JS/Script.js"></script>
<script type = "text/javascript" src = "JS/Modal.js"></script>
<script type = "text/javascript" src = "JS/Map.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
