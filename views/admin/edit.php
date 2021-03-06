<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<h1>AdminPanel: Изменить</h1>
<section class = "admin-form__wrapper">
    <?= Html::beginForm(['/api/edit'], 'post',["class" => ["admin-form"]]) ?>
        <?= Html::hiddenInput('id', "{$site->id}") ?>
        <?= Html::label("Название","id");?>
        <?= Html::textInput("name","{$site->Name}") ?>
        <?= Html::label("Цена","price");?>
        <?= Html::textInput("price","{$site->Price}") ?>
        <?= Html::label("Название","description");?>
        <?= Html::textarea("description","{$site->Description}") ?>
        <?= Html::label("Сетка","type");?>
        <?= Html::textInput("type","{$site->Grid}") ?>
        <?= Html::submitButton("Изменить",['class' => "button-admin button-admin__green advantage-button button-admin-form"])?>

    <?= Html::endForm() ?>

    <?= Html::tag('a',"Назад",[
        'class' => ["button-admin button-admin__purple"],
        'href' => Url::to(['/admin/index'])
    ])?>
</section>