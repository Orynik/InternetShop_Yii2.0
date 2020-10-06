<?php
    use yii\bootstrap\Html;
    use yii\helpers\Url;
?>

<div class="blur">
    <header class = "main-header">
        <div class = "wrapper">
            <section class = "slider-advantages">
                <h1 class = "visually-hidden">Преимущества</h1>
                <ul class = "slider">
                    <li class = "slider-item slide-1  active">
                        <h1 class = "slider-advantage-title">
                            Долго, дорого, <br>
                            Скрупулезно.
                        </h1>
                        <p>
                            Математически выверенный дизайн <br>
                            для вашего сайта или мобильного приложения.
                        </p>
                        <?= Html::tag('a',"Заказать",[
                            'class' => ["advantage-button button-red button"],
                            'href' => Url::to(['/site/catalog1'])
                        ])?>
                    </li>
                    <li class= " slider-item slide-2" >
                        <h1 class = "slider-advantage-title">
                            Любим математику<br>
                            как никто другой.
                        </h1>
                        <p>
                            Никакого креатива, только математические формулы <br>
                            для расчета идеальных пропорций.
                        </p>
                        <?= Html::tag('a',"Заказать",[
                            'class' => ["advantage-button button-red button"],
                            'href' => Url::to(['/site/catalog','sort' => 'name','order' => 'up'])
                        ])?>
                    </li>
                    <li class = "slider-item slide-3">
                        <h1 class = "slider-advantage-title">
                            Только ночь, <br>
                            только хардкор.
                        </h1>
                        <p>
                            Работать днем, Как все? Мы против этого <br>
                            Ближе к полуночи работа только начинается.
                        </p>
                        <?= Html::tag('a',"Заказать",[
                            'class' => ["advantage-button button-red button"],
                            'href' => Url::to(['/site/catalog','sort' => 'name','order' => 'up'])
                        ])?>
                    </li>
                </ul>
                <div class = "control-panel">
                    <span class = "slide-button select" id = "slide-1-radio"></span>
                    <span class = "slide-button" id = "slide-2-radio"></span>
                    <span class = "slide-button" id = "slide-3-radio"></span>
                </div>
            </section>
        </div>
    </header>
    <main>
        <div class = "wrapper">
            <section class = "products-nerds">
                <h1 class = "visually-hidden">Продукция</h1>
                <ul class = "product-list">
                    <li class = "product-item">
                        <img src = "img/index_products/web.jpg" width = "300" height="146" alt = "Веб-сайты">
                        <h2>Веб-сайты</h2>
                        <p>
                            Мир никогда не будет прежним <br>
                            после того, как увидит ваш сайт!
                        </p>
                        <?= Html::tag('a',"Заказать",[
                            'class' => ["button-red button"],
                            'href' => Url::to(['/site/catalog','sort' => 'name','order' => 'up'])
                        ])?>
                    </li>
                    <li class = "product-item">
                        <img src = "img/index_products/app.jpg" width = "300" height="146" alt = "Приложения">
                        <h2>Приложения</h2>
                        <p>
                            Покорите топ-10 приложений в <br>
                            AppStore и Google Play
                        </p>
                        <?= Html::tag('a',"Заказать",[
                            'class' => ["button-green button"],
                            'href' => Url::to(['/site/catalog','sort' => 'name','order' => 'up'])
                        ])?>
                    </li>
                    <li class = "product-item">
                        <img src = "img/index_products/presentation.jpg" width = "300" height="146" alt = "Презентации">
                        <h2>Презентации</h2>
                        <p>
                            Вы даже не подозреваете, <br>
                            насколько вы изумительны!
                        </p>
                        <?= Html::tag('a',"Заказать",[
                            'class' => ["button-yellow button"],
                            'href' => Url::to(['/site/catalog','sort' => 'name','order' => 'up'])
                        ])?>
                    </li>
                </ul>
            </section>
            <hr>
            <section class = "about-us">
                <h1 class = "visually-hidden"> О нас</h1>
                <section class = "summary">
                    <h3>
                        Мы - маленькая, но гордая<br>
                        дизайн-студия из Краснодара.
                    </h3>
                    <p>
                        Исповедуем принципы минимализма и чистоты. Ставим математический расчет <br>
                        привыше креатива. Работаем не покладаю рук, как роботы.
                    </p>
                    <ul class = "order-type-list">
                        <h2>Выполняем заказы на разработку:</h2>
                        <li class = "order-type-item">Веб-сайтов любой сложности</li>
                        <li class = "order-type-item">Мобильных приложений iOS и Android</li>
                        <li class = "order-type-item">Слайдшоу и видео для корпоративных презентаций</li>
                    </ul>
                </section>
                <section class = "statistic">
                    <h1 class = "visually-hidden">Статистика</h1>
                    <img src = "img/index_products/nerds_logo_about.jpg" alt = "Логотип Nerds" width = "360" height = "206" >
                    <table class = "statistic">
                        <caption><h4>С 2004 года любим точность во всем:</h4></caption>
                        <tr class = "procent">
                            <td>146<sup>%</sup></td>
                            <td>100<sup>%</sup></td>
                            <td>50<sup>%</sup></td>
                        </tr>
                        <tr class = "lvl">
                            <td>
                                Уровень<br>
                                самоотдачи
                            </td>
                            <td>
                                Соблюдение <br>
                                сроков
                            </td>
                            <td>
                                Минимальная <br>
                                предоплата
                            </td>
                        </tr>
                    </table>
                </section>
            </section>
            <hr>
        </div>
        <div class = "wrapper">
            <section class = "partners">
                <h1 class = "visually-hidden">Партнеры</h1>
                <ul class="partners-list">
                    <li class="partners-item"><a href="#"><img src="img/partners/html_academy.png" alt="HTML Academy"></a></li><hr>
                    <li class="partners-item"><a href="#"><img src="img/partners/borodinski.png" alt="Barbershop Borodinski"></a></li><hr>
                    <li class="partners-item"><a href="#"><img src="img/partners/pink.png" alt="Pink"></a></li><hr>
                    <li class="partners-item"><a href="#"><img src="img/partners/mishka.png" alt="Mishka"></a></li>
                </ul>
            </section>
            <hr>
        </div>
    </main>
</div>
<script type = "text/javascript" src = "JS/Script.js"></script>