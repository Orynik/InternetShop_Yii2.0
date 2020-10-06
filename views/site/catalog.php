<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use yii\helpers\Url;
?>

<header class="main-header">
        <h1 class="header-title">Магазин готовых шаблонов</h1>
</header>
<div class = "blur">
        <main>
            <div class = "wrapper wrapper-flex-catalog">
                <div class="wrapper-flex-template-catalog">
                    <div class = "flex-template">
                        <section class = "ready-template">
                            <h1 class = "visually-hidden">Готовые шаблоны</h1>
                            <div class = "sorting">
                                <h2>Сортировать:</h2>
                                <ul class = "sorting-by">
                                    <li class = "<?php
                                         echo explode("/",$_GET["sort"])[0] == "price" ? 'sorting-by-elements active-sort' : "sorting-by-elements"
                                    ?>">
                                        <?= Html::tag('a',"По цене",[
                                                'class' => [
                                                        explode("/",$_GET["sort"])[0] == "price" ? 'active-sort' : ""],
                                                'href' => Url::to(['/site/catalog', 'sort' => 'price','order' => "up"])
                                        ])?>
                                    </li>
                                    <li class = "<?php
                                         echo explode("/",$_GET["sort"])[0] == "name" ? 'sorting-by-elements active-sort' : "sorting-by-elements"
                                    ?>">
                                        <?= Html::tag('a',"По названию",[
                                                'class' => [
                                                    explode("/",$_GET["sort"])[0] == "name" ? 'active-sort' : ""],
                                                'href' => Url::to(['/site/catalog', 'sort' => 'name','order' => 'up',])
                                        ])?>
                                   </li>

                                    <li>
                                        <?= Html::tag('a',"",[
                                            'class' => [
                                                explode("/",$_GET["order"])[0] == "up" ? 'sort-down active-sort-order' : "sort-down"],
                                            'href' => Url::to(['/site/catalog', 'order' => 'up','sort' => explode("/",$_GET["sort"])[0]])
                                        ])?>
                                    </li>
                                    <li>
                                        <?= Html::tag('a',"",[
                                            'class' => [
                                                explode("/",$_GET["order"])[0] == "down" ? 'sort-up active-sort-order' : "sort-up"],
                                            'href' => Url::to(['/site/catalog', 'order' => 'down','sort' => explode("/",$_GET["sort"])[0]])
                                        ])?>
                                    </li>
                                </ul>
                            </div>
                            <div class = "template">
                                <ul class = "template-list">
                                <?php foreach ($sites as $siteInfo): ?>
                                        <li class="template-item">
                                        <span class = "buttons-template">
                                            <i></i>
                                        </span>
                                            <img src="img/templates/<?= mb_strtolower(Html::encode("{$siteInfo->Name}")) . ".jpg"?> " alt="Макет <?= mb_strtolower(Html::encode("{$siteInfo->Name}"))?> "   width = "360" height = "576">
                                            <div class = "template-describe">
                                                <div class = "template-discribe-wrapper">
                                                    <h3>
                                                        <?= Html::encode("{$siteInfo->Name}") ?>
                                                    </h3>
                                                    <span>
                                                    <?= Html::encode("{$siteInfo->Description}") ?>
                                                </span>
                                                    <button class = "button button-red button-buy-template"><?= Html::encode("{$siteInfo->Price}") ?> РУБ.</button>
                                                </div>
                                            </div>
                                        </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                            <ul class = "breadcrumbs">
                            <?php
                                echo LinkPager::widget([
                                'pagination' => $pagination,
//                                    'options'=>[
//                                            'class'=> '',
//                                            'linkOptions' => 'breadcrumbs-item'
//                                    ],
                                ]);
                            ?>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>