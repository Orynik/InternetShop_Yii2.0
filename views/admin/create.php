<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<h1>AdminPanel: Создать</h1>
<section class = "admin-form__wrapper">
    <?= Html::beginForm(['/api/create'], 'post',["class" => ["admin-form"]]) ?>
    <?= Html::label("Название","name");?>
    <?= Html::textInput("name","") ?>
    <?= Html::label("Цена","price");?>
    <?= Html::textInput("price","") ?>
    <?= Html::label("Название","description");?>
    <?= Html::textarea("description","") ?>
    <?= Html::label("Сетка","type");?>
    <?= Html::textInput("type","") ?>
    <?= Html::submitButton("Отправить",["class" => "advantage-button button-admin-form button-admin button-admin__green"])?>

    <?= Html::endForm() ?>

    <?= Html::tag('a',"Назад",[
        'class' => ["button-admin button-admin__purple"],
        'href' => Url::to(['/admin/index'])
    ])?>
</section>