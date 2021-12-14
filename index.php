<!DOCTYPE html>
<html lang="en">
<?php
$data = require_once('data.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Alecto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header__container container">
            <h1><a class="header__logo"><img src="<?php echo $data['siteLogo']['url']?>" alt="<?php echo $data['siteLogo']['alt']?>"></a></h1>
            <nav class="header__menu menu ">
                <ul class="menu__list menu__list_h">
                    <?php
                    foreach ($data['mainMenu'] as $menuItem) {
                        ?>
                        <li class="menu__item"><a href="<?php echo $menuItem['url']?>" class="menu__link"><?php echo $menuItem['title']?></a></li>
                        <?php
                    }
                    ?>
                    <li class="menu__item menu__search"><a href="#" class="menu__link"><img src="./assets/img/glass.png"
                                                                               alt="Search"></a></li>
                </ul>
            </nav>
            <div class="header__burger">
                <span></span>
            </div>
        </div>
    </header>
    <section class="main">
        <div id="carousel-header" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php
                foreach ($data['mainSlider'] as $sliderItem) {
                    ?>
                    <button type="button" data-bs-target="#carousel-feedback" data-bs-slide-to="<?php echo $sliderItem['data-bs-slide-to']?>"
                            aria-label="<?php echo $sliderItem['aria-label']?>" <?php if ($sliderItem['isActive']) echo 'class="active" aria-current="true"'?> ></button>
                    <?php
                }
                ?>
            </div>
            <div class="carousel-inner">
                <?php foreach ($data['mainSlider'] as $mainSliderItem) {
                ?>
                <div class="carousel-item <?php if ($mainSliderItem['isActive']) echo 'active'?>">
                    <div class="carousel-caption d-md-block">
                        <h3><span><?php echo $mainSliderItem['title']['main'] ?></span><?php echo $mainSliderItem['title']['second']?></h3>
                        <p><?php echo $mainSliderItem['description']?></p>
                        <a href="<?php echo $mainSliderItem['link']['url']?>" class="main__button button"><?php echo $mainSliderItem['link']['text']?></a>
                    </div>
                </div>
                <?php }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-header" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-header" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="main__more-arrow">
                <a href="#about" class="main__more-arrow_mov"><img src="./assets/img/down_arrow.png" alt="More"></a>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="about__container container">
            <div class="about__header header-block">
                <h2 class="header-block__title"><?php echo $data['sectionAbout']['title']?></h2>
                <p class="header-block__sub-title"><?php echo $data['sectionAbout']['subTitle']?></p>
            </div>
            <div class="about__body">
                <div class="about__row">
                    <?php
                        foreach ($data['sectionAbout']['aboutItems'] as $aboutItem) {
                            ?>
                            <div class="about__item">
                                <div class="about__image">
                                    <img src="<?php echo $aboutItem['imageUrl']?>" alt="<?php echo $aboutItem['imageAlt']?>">
                                </div>
                                <h4 class="about__item-title"><?php echo $aboutItem['itemTitle']?></h4>
                                <p class="about__item-text"><?php echo $aboutItem['itemText']?></p>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <a href="<?php echo $data['sectionAbout']['link']['url']?>" class="about__button button"><?php echo $data['sectionAbout']['link']['text']?></a>
            </div>
        </div>
    </section>
    <section class="info">
        <?php
        foreach ($data['sectionInfo'] as $infoItem) {
            ?>
            <div class="info__item">
                <div class="info__container container">
                    <article class="info__body">
                        <h3 class="info__title"><?php echo $infoItem['infoTitle']?></h3>
                        <p class="info__text"><?php echo $infoItem['infoText']?></p>
                        <a href="<?php echo $infoItem['link']['url']?>" class="info__button button"><?php echo $infoItem['link']['text']?></a>
                    </article>
                    <div class="info__image">
                        <img src="<?php echo $infoItem['imageUrl']?>" alt="<?php echo $infoItem['imageAlt']?>">
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </section>
    <section class="feedback">
        <div id="carousel-feedback" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php
                foreach ($data['feedbackSlider'] as $fSliderItem) {
                    ?>
                    <button type="button" data-bs-target="#carousel-feedback" data-bs-slide-to="<?php echo $fSliderItem['data-bs-slide-to']?>"
                            aria-label="<?php echo $fSliderItem['aria-label']?>" <?php if ($fSliderItem['isActive']) echo 'class="active" aria-current="true"'?> ></button>
                <?php
                }
                ?>
            </div>
            <div class="carousel-inner">
                <?php
                foreach ($data['feedbackSlider'] as $fSliderItem) {
                    ?>
                    <div class="carousel-item <?php if ($fSliderItem['isActive']) echo 'active'?>">
                        <div class="feedback__photo ">
                            <img src="<?php echo $fSliderItem['image']['url']?>" class="d-block w-100" alt="<?php echo $fSliderItem['image']['alt']?>">
                        </div>
                        <div class="carousel-caption d-md-block">
                            <p><span><?php echo $fSliderItem['title']['main']?></span> <?php echo $fSliderItem['title']['second']?></p>
                            <p><?php echo $fSliderItem['description']?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-feedback"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-feedback"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </section>
    <section class="services">
        <div class="services__container container">
            <div class="services__header header-block">
                <h2 class="header-block__title"><?php echo $data['servicesSection']['title']['main']?></h2>
                <p class="header-block__sub-title"><?php echo $data['servicesSection']['title']['description']?></p>
            </div>
            <div class="services__body">
                <?php
                foreach ($data['servicesSection']['serviceItems'] as $serviceItem) {
                    ?>
                    <article class="services__item">
                        <div class="services__image">
                            <img src="<?php echo $serviceItem['image']['url']?>" alt="<?php echo $serviceItem['image']['alt']?>">
                        </div>
                        <h3 class="services__item-title"><?php echo $serviceItem['title']?></h3>
                        <p class="services__item-text"><?php echo $serviceItem['description']?></p>
                    </article>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="team__container container-fluid">
            <div class="team__header header-block">
                <h2 class="header-block__title"><?php echo $data['teamSection']['title']['main']?></h2>
                <p class="header-block__sub-title"><?php echo $data['teamSection']['title']['description']?></p>
            </div>
            <div class="team__body">
                <?php
                foreach ($data['teamSection']['teamMember'] as $teamMember) {
                    ?>
                    <div class="team__item"><?php echo $teamMember?></div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="pricing">
        <div class="pricing__container container">
            <div class="pricing__header header-block">
                <h2 class="header-block__title"><?php echo $data['pricingSection']['title']['main']?></h2>
                <p class="header-block__sub-title"><?php echo $data['pricingSection']['title']['description']?></p>
            </div>
            <div class="pricing__body">
                <?php
                foreach ($data['pricingSection']['priceItem'] as $priceItem) {
                    ?>
                    <div class="pricing__item">
                        <div class="pricing__price"><?php echo $priceItem['price']?></div>
                        <div class="pricing__name"><?php echo $priceItem['name']?></div>
                        <div class="pricing__description"><?php echo $priceItem['description']?>
                        </div>
                        <a href="<?php echo $priceItem['link']['url']?>" class="pricing__button"><?php echo $priceItem['link']['text']?><img src="<?php echo $priceItem['link']['imageUrl']?>" alt="<?php echo $priceItem['link']['imageAlt']?>"></a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="map">
        <div class="map__container">
            <div class="map__body">
                <h3 class="map__title"><?php echo $data['mapSection']['title']?></h3>
                <p class="map__text"><?php echo $data['mapSection']['text']?></p>
                <a href="<?php echo $data['mapSection']['link']['url']?>" class="map__button button"><?php echo $data['mapSection']['link']['text']?></a>
            </div>
            <div class="map__mapping"><img src="<?php echo $data['mapSection']['map']['url']?>" alt="<?php echo $data['mapSection']['map']['alt']?>"></div>
        </div>
    </section>
    <footer class="footer">
        <div class="try">
            <p class="try__text"><?php echo $data['footerAdv']['textBegin']?><span><?php echo $data['footerAdv']['markedText']?></span><?php echo $data['footerAdv']['textEnd']?></p>
            <a href="<?php echo $data['footerAdv']['link']['url']?>" class="try__button button"><?php echo $data['footerAdv']['link']['text']?></a>
        </div>
        <div class="footer__block">
            <div class="footer__container container">
                <div class="footer__copy"><?php echo $data['copyright']?></div>
                <nav class="footer__menu menu ">
                    <ul class="menu__list">
                        <?php
                        foreach ($data['mainMenu'] as $menuItem) {
                            ?>
                            <li class="menu__item"><a href="<?php echo $menuItem['url']?>" class="menu__link"><?php echo $menuItem['title']?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</div>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>