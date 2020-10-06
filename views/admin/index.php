<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminNerds</title>
</head>
<body>
    <h1>AdminPanel: Обзор</h1>
    <section>
        <table border = "1" class = "table-admin">
            <thead>
            <tr>
                <td>
                    Название
                </td>
                <td>
                    Цена
                </td>
                <td>
                    Тип сетки
                </td>
                <td>
                    Опции
                </td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sites as $siteInfo): ?>
                <tr>
                    <td><?= Html::encode("{$siteInfo->Name}")?></td>
                    <td><?= Html::encode("{$siteInfo->Price}") . ' Руб.' ?></td>
                    <td><?= Html::encode("{$siteInfo->Grid}") ?></td>
                    <td class = "admin-btnoptions">
                        <span class = "admin-btn admin-btn__delete">
                            <?= Html::tag('a',"Удалить",[
                                    'class' => "button-admin button-admin__red",
                                    'href' => Url::to(['/admin/delete', 'id' => Html::encode("{$siteInfo->id}")])
                            ])?>
                        </span>
                        <?= Html::tag('a',"Детали",[
                                'class' => ["button-admin button-admin__blue"],
                                'href' => Url::to(['/admin/details', 'id' => Html::encode("{$siteInfo->id}")])
                        ])?>
                        <?= Html::tag('a',"Изменить",[
                                'class' => ["button-admin button-admin__green"],
                                'href' => Url::to(['/admin/edit', 'id' => Html::encode("{$siteInfo->id}")])
                        ])?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?= Html::tag('a',"Добавить",[
            'class' => ["button-admin button-admin__purple"],
            'href' => Url::to(['/admin/create'])
        ])?>
    </section>
</body>
</html>