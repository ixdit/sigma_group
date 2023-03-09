<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sg-2site
 */

?>

<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__menu">
                <ul>
                    <li><a href="">ГОТОВЫЕ ДОМА</a></li>
                    <li><a href="">НАШИ ПРОЕКТЫ</a></li>
                    <li><a href="">УСЛУГИ</a></li>
                    <li><a href="">ПОРТФОЛИО</a></li>
                    <li><a href="">ИПОТЕКА/ГОСПОДДЕРЖКА</a></li>
                    <li><a href="">ВАКАНСИИ</a></li>
                    <li><a href="">КОНТАКТЫ</a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-2">
                    <div class="site-footer__title">ДОМА ИЗ КИРПИЧА</div>
                    <ul class="site-footer__list">
                        <li><a href="">Подраздел 1</a></li>
                        <li><a href="">Подраздел 2</a></li>
                        <li><a href="">Подраздел 3</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <div class="site-footer__title">ДОМА ИЗ КИРПИЧА</div>
                    <ul class="site-footer__list">
                        <li><a href="">Подраздел 1</a></li>
                        <li><a href="">Подраздел 2</a></li>
                        <li><a href="">Подраздел 3</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <div class="site-footer__title">ДОМА ИЗ КИРПИЧА</div>
                    <ul class="site-footer__list">
                        <li><a href="">Подраздел 1</a></li>
                        <li><a href="">Подраздел 2</a></li>
                        <li><a href="">Подраздел 3</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <div class="site-footer__title">ДОМА ИЗ КИРПИЧА</div>
                    <ul class="site-footer__list">
                        <li><a href="">Подраздел 1</a></li>
                        <li><a href="">Подраздел 2</a></li>
                        <li><a href="">Подраздел 3</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <div class="site-footer__title">ДОМА ИЗ КИРПИЧА</div>
                    <ul class="site-footer__list">
                        <li><a href="">Подраздел 1</a></li>
                        <li><a href="">Подраздел 2</a></li>
                        <li><a href="">Подраздел 3</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <div class="site-footer__title">ДОМА ИЗ КИРПИЧА</div>
                    <ul class="site-footer__list">
                        <li><a href="">Подраздел 1</a></li>
                        <li><a href="">Подраздел 2</a></li>
                        <li><a href="">Подраздел 3</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-3 col-6">
                    <a href="">
                        <img src="images/logo-white.svg" alt="" class="logo is-desktop">
                        <img src="images/logo-short-white.svg" alt="" class="logo is-mobile">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-5 col-6 site-footer__mobile">
                    <div class="site-footer__span">г. Великий Новгород, Панковская, 11А</div>
                    <div class="site-footer__contacts">
                        <a href="">Тел.: 8 (8162) 15-00-15</a>
                        <a href="">E-mail: info@sigma53.ru</a>
                    </div>
                </div>
                <div class="col-2 site-footer__desktop">
                    <span class="site-footer__span">Режим работы: </span>
                    <span>Пн.-Пт. с 09:00 до 18:00</span>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="site-footer__socials">
                        <a href="">
                            <img src="images/social/telegram.svg" alt="">
                        </a>
                        <a href="">
                            <img src="images/social/vk.svg" alt="">
                        </a>
                        <a href="">
                            <img src="images/social/whatsapp.svg" alt="">
                        </a>
                        <a href="">
                            <img src="images/social/youtube.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="fixed-nav">
    <button type="button" class="js-fixed">
        <svg width="12" height="12">
            <use xlink:href="images/svg-sprite.svg#close"></use>
        </svg>
    </button>
    <div class="fixed-nav__fixed">
        <a href="">
            <span>
                <svg width="34" height="32">
                    <use xlink:href="images/svg-sprite.svg#fixed-house"></use>
                </svg>
            </span>
            Проект на просчет
        </a>
        <a href="">
        <span>
            <svg width="34" height="32">
                <use xlink:href="images/svg-sprite.svg#fixed-calculator"></use>
            </svg>
        </span>
            Калькулятор
        </a>
        <a href="">
        <span>
            <svg width="34" height="32">
                <use xlink:href="images/svg-sprite.svg#fixed-health"></use>
            </svg>
        </span>
            Избранное
        </a>
        <a href="">
        <span>
            <svg width="34" height="32">
                <use xlink:href="images/svg-sprite.svg#fixed-saves"></use>
            </svg>
        </span>
            В закладки
        </a>
    </div>
</div>

<div id="order-payment" class="modal">
    <div class="modal__title">Отправить проект на просчет</div>

    <form action="" class="js-modal-order">
        <div class="form-group">
            <input type="text" name="name" placeholder="Ваше имя" required>
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="+7 (___) ___-__-__" required class="js-phone-mask">
        </div>
        <div class="form-group">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Ваше сообщение" required></textarea>
        </div>

        <div class="form-group">
            <div class="input-images-1" style="padding-top: .5rem;"></div>
        </div>

        <div class="text-center form-button">
            <button type="submit" class="btn btn-blue">Отправить</button>
        </div>
    </form>
</div>

<div id="callback-modal" class="modal">
    <div class="modal__title">
        Мы перезвоним Вам в ближайшее время
    </div>

    <form action="" class="modal__callback js-modal-feedback">
        <div class="form-group">
            <input type="text" placeholder="Введите Ваше имя" name="name" required>
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="+7 (___) ___-__-__" required class="js-phone-mask">
        </div>
        <div class="text-center form-button">
            <button type="submit" class="btn btn-blue">Жду звонка!</button>
        </div>
    </form>
</div>

<div id="select-city" class="modal city">
    <div class="modal__title sm">Выберите Ваш город</div>

    <div class="city-list">
        <div class="row">
            <div class="col-4">
                <a href="">
                    <span>Великий Новгород</span>
                    <img src="images/city/novgorod.jpg" alt="">
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <span>Санкт-Петербург</span>
                    <img src="images/city/piter.jpg" alt="">
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <span>Москва</span>
                    <img src="images/city/msk.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="fixed-social">
    <a href="">
        <img src="images/fixed-socials/tg.svg" alt="">
    </a>
    <a href="">
        <img src="images/fixed-socials/wp.svg" alt="">
    </a>
</div>

<?php wp_footer(); ?>

</body>
</html>
