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
                <aside>
                    <form class="form-sidebar" method = "POST" action = "action.php">
                        <fieldset class = "value">
                            <legend>Стоимость:</legend>
                            <div class = "range-div">
                                <input class = "range"  name = "cost" type = "range" min = "0" max = "15000" id = "range" value = "8700" step = "1" oninput="change()"><br> <!--TO DO привязать к полям max min-->
                            </div>
                            <div class = "cost-label">
                                <label class = "first-label">
                                    <input type = "number" name = "min-value-range" id = "min-range" value = "0">
                                    <span>ОТ:</span>
                                </label>
                                <label class = "second-label">
                                    <input type = "number" name = "max-value-range" id = "max-range" max = "15000" value = "8700" oninput="changeMax()">
                                    <span>ДО:</span>
                                </label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class = "title-grid">Сетка:</legend>
                            <label class = "radio">
                                <input class = "radio" type = "radio" name = "grid" value = "adaptive" checked>
                                <div class = "radio__text">Адаптивная</div>
                            </label>
                            <label class = "radio">
                                <input class = "radio" type = "radio" name = "grid" value = "fixed">
                                <div class = "radio__text">Фиксированная</div>
                            </label>
                            <label class = "radio">
                                <input class = "radio" type = "radio" name = "grid" value = "flex" disabled>
                                <div class = "radio__text">Резиновая</div>
                            </label>
                        </fieldset>
                        <fieldset>
                            <legend>Особенности:</legend>
                            <label class = "checkbox">
                                <input class = "checkbox" type = "checkbox" name = "feature" value = "slider">
                                <div class="checkbox__text">Слайдер<br></div>
                            </label>
                            <label class = "checkbox">
                                <input class = "checkbox" type = "checkbox" name = "feature" value = "block-of-features">
                                <div class="checkbox__text">Блок преимуществ<br></div>
                            </label>
                            <label class = "checkbox">
                                <input class = "checkbox" type = "checkbox" name = "feature" value = "news">
                                <div class="checkbox__text">Новости<br></div>
                            </label>
                            <label class = "checkbox">
                                <input class = "checkbox" type = "checkbox" name = "feature" value = "gallery">
                                <div class="checkbox__text">Галерея<br></div>
                            </label>
                            <label class = "checkbox">
                                <input class = "checkbox" type = "checkbox" name = "feature" value = "basket" disabled>
                                <div class="checkbox__text">Корзина<br></div>
                            </label>
                        </fieldset>
                        <input class = "button form-button" type = "submit" value = "Показать">
                    </form>
                </aside>
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
                        </section>
                    </div>
                </div>
            </div>