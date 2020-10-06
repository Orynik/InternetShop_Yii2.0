<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<h1>AdminPanel: Детали по поводу сайта "<?= Html::encode("{$site->Name}") ?>"</h1>
<section class = "admin-form">
    <span class = "admin-form__label"><b>Название:</b></span>
    <?= Html::encode("{$site->Name}") ?>
    <span class = "admin-form__label"><b>Цена:</b></span>
    <?= Html::encode("{$site->Price}") ?>
    <span class = "admin-form__label"><b>Тип сетки:</b></span>
    <?= Html::encode("{$site->Grid}") ?>
    <span class = "admin-form__label"><b>Описание</b></span>
    <p><?= Html::encode("{$site->Description}") ?></p>
</section>


<?= Html::tag('a',"Назад",[
    'class' => ["button-admin button-admin__purple"],
    'href' => Url::to(['/admin/index'])
])?>