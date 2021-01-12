<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 2,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Статьи',
    'longtitle' => 'Extended Title',
    'description' => '',
    'alias' => 'stati',
    'alias_visible' => 0,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => 'intro intro intro....',
    'content' => '',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 2,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1608723472,
    'editedby' => 1,
    'editedon' => 1608890144,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1608847920,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'stati/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'image' => 
    array (
      0 => 'image',
      1 => 'assets/images/article.jpg',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    '_content' => '<!doctype html>
<html lang="ru">
    <head>
        <title>Статьи - MODX Revolution</title>
<base href="[[!++site_url]]" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="./assets/fonts/awesome/v5.15.1/css/all.min.css" />

<link rel="stylesheet" href="./assets/css/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="./assets/css/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="./assets/css/owl-carousel/owl-nav.css">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<link rel="stylesheet" href="./assets/css/jquery.fancybox.min.css">
    
<link rel="stylesheet" href="./assets/css/main.css" />

<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "name": "Статьи",
        "image": "http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png",
        "author": "санэпид-служба.рф",
        "headline": "Статьи",
        "dateModified": "2020-12-25 01:12:00",
        "datePublished": "2020-12-25 01:12:00",
        "publisher": {
            "@type": "Organization",
            "name": "[[+domain_name]]",
            "logo": {
                "@type": "ImageObject",
                "url": "http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png",
                "width": "118",
                "height": "107"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/stati/"
        }
    }
</script>
<meta property="og:locale" content="ru_RU" />
<meta property="og:site_name" content="Статьи">
<meta property="og:title" content="Статьи" />
<meta property="og:description" content="" />
<meta property="og:url" content="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/stati/" />
<meta property="og:type" content="article" />
<meta property="og:image" content="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png" />
<meta property="og:image:secure_url" content="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png" />
<meta property="article:published_time" content="2020-12-25 01:12:00" />
    </head>
    <body>
        <div id="navSidebar" class="nav-sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="left-sidebar">
        [[!pdoMenu?
            &parents=`7`
            &level=`2`
            &tplOuter=`@INLINE <div>[[+wrapper]]</div>`
            &tpl=`@INLINE <div class="accordionMenu"><h5 class="accordion">[[+menutitle]]</h5>[[+wrapper]]</div>`
                &-tplHere=`@INLINE <li class="nav-item active"><a href="[[+link]]" [[+attributes]] class="nav-link">[[+menutitle]] 3</a>[[+wrapper]]</li>`
            &tplParentRow=`@INLINE <div class="accordionMenu"><h5 class="accordion">[[+menutitle]]</h5>[[+wrapper]]</div>`
            &tplInner=`@INLINE <div class="panel">[[+wrapper]]</div>`
            &tplInnerRow=`@INLINE <a href="[[+link]]">[[+menutitle]]</a>`
                &-tplInnerHere=`@INLINE <a class="dropdown-item" href="[[+link]]">[[+menutitle]] 2</a>`
        ]]
        
            <div class="corona">
                <div class="b-block">
                    <a href="koronavirus.html">Коронавирус</a>
                </div>
            </div>
        
        
            <div class="org">
                <div class="b-block">
                    <a href="organizacziyam.html">Организациям</a>
                </div>
            </div>
        
        
            <div class="prepare">
                <div class="lr-block">
                    <img src="assets/images/prepare-icon.svg" alt="Подготовка к обработке" />
                    <a href="podgotovka-k-obrabotke.html">Подготовка к обработке</a>
                </div>
            </div>    
        
        
            <div class="order">
                <div class="r-block">
                    <img src="assets/images/dogovor_icon.png" alt="Заключить договор" />
                    <a href="/">Заключить договор</a>
                </div>
            </div>    
        
    </div>
</div>
        <header>
    <div class="container">
        <div class="topline">
            <div class="logo">
                <a href="/">
                    <img src="/assets/images/logo.png" alt="САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА" />
                    <span>
                        САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА
                    </span>
                </a>
            </div>
            <div>
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Москва</span>
                </div>
                <div class="search">
                    [[!SimpleSearchForm? &landing=`41` &tpl=`form.formSearch`]]
                </div>
                <div class="phone">
                    <a href="tel:">8 (951) 79-38-397</a>
                </div>
            </div>
        </div>
        <div class="topline mobile">
            <div class="header">
                <a href="/">
                    <img src="/assets/images/logo.png" alt="САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА" />
                </a>
                <div>
                    <a href="/">
                        <span>
                            САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА
                        </span>
                    </a>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Москва</span>
                    </div>
                </div>
                <div class="menu-btn">
                    <button onclick="openNav();"><i class="fas fa-bars"></i> Меню</button>
                </div>
            </div>
            <div class="search">
                [[!SimpleSearchForm? &landing=`41` &tpl=`form.formSearch`]]
            </div>
        </div>
        <div class="navigation">
            <div class="nav">
                <a href="/" class="link-home">
                    <i class="fas fa-home"></i>
                </a>
                <ul class=""><li class="first"><a href="kontaktyi.html" >Контакты</a></li><li class="active"><a href="stati/" >Статьи</a></li><li><a href="dokumentyi.html" >Документы</a></li><li><a href="otzyivyi/" >Отзывы</a></li><li class="last"><a href="vakansii/" >Вакансии</a></li></ul>
            </div>
            <div class="callback animate">
                <a href="" class="openModal">Заказать звонок</a>
            </div>
        </div>
    </div>
</header>
        <main>
            <div class="container sticky-nav">
                <div class="navigation">
                    <div class="nav">
                        <a href="/" class="link-home">
                            <i class="fas fa-home"></i>
                        </a>
                        <ul class=""><li class="first"><a href="kontaktyi.html" >Контакты</a></li><li class="active"><a href="stati/" >Статьи</a></li><li><a href="dokumentyi.html" >Документы</a></li><li><a href="otzyivyi/" >Отзывы</a></li><li class="last"><a href="vakansii/" >Вакансии</a></li></ul>
                    </div>
                    <div class="callback animate">
                        <a href="" class="openModal">Заказать звонок</a>
                    </div>
                </div>
            </div>
            <div id="articles">
                <div class="container">
                    <div class="breadcrumbs">
    <ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Главная</a></li>&nbsp;/&nbsp;<li class="breadcrumb-item active">Статьи</li></ol>
</div>
                    <div class="listArticles">
                        <div class="card">
    <div class="card-header">
        <h3><a href="ximiya-dlya-dezinfekczii-bez-zapaxa-ili-s-zapaxom.html">Химия для дезинфекции без запаха или с запахом?</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="ximiya-dlya-dezinfekczii-bez-zapaxa-ili-s-zapaxom.html" class="btn-red">читать далее</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3><a href="travlya-tarakanov-samostoyatelno-svoimi-silami.html">Травля тараканов самостоятельно своими силами</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="travlya-tarakanov-samostoyatelno-svoimi-silami.html" class="btn-red">читать далее</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3><a href="chto-delat-posle-obrabotki-i-nadolgo-li-ostanetsya-zapax.html">Химия для дезинфекции без запаха или с запахом?</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="chto-delat-posle-obrabotki-i-nadolgo-li-ostanetsya-zapax.html" class="btn-red">читать далее</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3><a href="professionalnoe-unichtozhenie-klopov-garantiruet-100-rezultat.html">Травля тараканов самостоятельно своими силами</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="professionalnoe-unichtozhenie-klopov-garantiruet-100-rezultat.html" class="btn-red">читать далее</a>
    </div>
</div>
                        [[!+page.nav]]
                    </div>
                </div>
            </div>
        </main>
        <footer>
           <div class="container">
    <div class="footer">
        <div class="menu">
            <h5>Меню</h5>
            <ul>
                <li>
                    <a href="#">О компании</a>
                </li>
                <li>
                    <a href="#">Наши работы</a>
                </li>
                <li>
                    <a href="#">Отзывы</a>
                </li>
                <li>
                    <a href="#">Обратная связь</a>
                </li>
                <li>
                    <a href="#">Карта сайта</a>
                </li>
            </ul>
        </div>
        <div class="contacts">
            <h5>Наши контакты</h5>
            <div class="address">
                <p>
                     Большой бульвар, 2
                </p>
            </div>
            <div class="phone">
                <p class="desktop">
                   тел: 8 (951) 79-38-397
                </p>
                <p class="mobile">
                    <a href="tel:89517938397">8 (951) 79-38-397</a>
                    <a href="tel:89517938397">8 (951) 79-38-397</a>
                </p>
                <p class="time">
                    24/7
                </p>
            </div>
            <div class="email">
                <a href="mailto:klop.online@yandex.ru">klop.online@yandex.ru</a>
            </div>
        </div>
        <div class="requisites-block">
            <div class="logo">
                <a href="/">
                    <img src="/assets/images/logo.png" alt="САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА" />
                    <span>
                        САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА
                    </span>
                </a>
            </div>
            <div class="requisites">
                <p>
                   САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА 
                </p>
                <p>
                    ИНН: 125454564654646
                </p>
                <p>
                    ОГРН: 45464646
                </p>
            </div>
            <div class="social">
                <a href="vibre"><img src="./assets/images/viber.svg" alt="viber" /></a>
                <a href="whatsapp"><img src="./assets/images/whatsapp.svg" alt="whatsapp" /></a>
                <a href="insta"><img src="./assets/images/instagram.svg" alt="instagram" /></a>
                <a href="fb"><img src="./assets/images/facebook.svg" alt="facebook" /></a>
                <a href="vk"><img src="./assets/images/vk.svg" alt="vk" /></a>
                <a href="ok"><img src="./assets/images/odnoklassniki.svg" alt="odnoklassniki" /></a>
            </div>
            <div class="policy">
                <a href="" class="openModalPolicy">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</div>
        </footer>
        <script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/jquery.mask.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/jquery.fancybox.min.js"></script>
<script src="./assets/js/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    function openNav() {
        document.getElementById("navSidebar").style.width = "80%";
    }
    function closeNav() {
        document.getElementById("navSidebar").style.width = "0";
    }

    var acc = document.getElementsByClassName("accordion");
    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
    
    $(document).ready(function(){
        $(\'.clients\').slick({
            slidesToShow: 3,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 0,
            cssEase: \'linear\',
            speed: 2000,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 577,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 325,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });

    $(document).ready(function() {
        $(document).scroll(function() {
            if ($(document).scrollTop() > 170) {
                $(\'.sticky-nav\').addClass(\'show\');
            } else {
                $(\'.sticky-nav\').removeClass(\'show\');
            }
        });
        $(\'.list-news .toggle\').on(\'click\', function() {
            $(this).toggleClass(\'active\').siblings(\'a\').toggleClass(\'show\');
        });
        
        $(\'.card\').on(\'mouseover\', function() {
            $(this).children(\'.card-overlay\').show();
        });

        $(\'.card\').on(\'mouseout\', function() {
            $(this).children(\'.card-overlay\').hide();
        });

        $(\'.carouselReviews\').owlCarousel({
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            items: 3,
            responsive: {
                0: {
                    items: 1,
                    margin: 20,
                    stagePadding: 20,
                },
                425: {
                    items: 1,
                    loop: true,
                    margin: 20,
                    stagePadding: 90,
                },
                600: {
                    items: 1,
                    loop: true,
                    margin: 30,
                    stagePadding: 130,
                },
                768: {
                    loop: true,
                    items: 1,
                    margin: 30,
                    stagePadding: 220,
                },
                800: {
                    loop: true,
                    items: 1,
                    margin: 30,
                    stagePadding: 220,
                },
                1024: {
                    loop: true,
                    items: 1,
                    margin: 50,
                    stagePadding: 320,
                },
                1280: {
                    nav: true,
                    dots: false,
                    autoplay: false,
                    margin: 30,
                    items: 3,
                }
            }
        });

        $(\'.carouselSpecialists\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });
        
        $(\'.carouselNews\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselOurWorks\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselEquipments\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselChemical\').owlCarousel({
            autoplay: true,
            items: 1,
        });

        $(\'.carouselCertificates\').owlCarousel({
            items: 4,
            dots: false,
            nav: false,
            autoplay: false,
            margin: 10,
            loop: true,
            responsive : {
                0: {
                    items: 2,
                    dots: true,
                },
                768: {
                    items: 3,
                    nav: true,
                },
                1280: {
                    items: 4,
                    nav: true,
                }
            }
        });

        $(\'.carouselClients\').owlCarousel({
            items: 3,
            dots: false,
            nav: false,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplaySpeed: 4000,
            margin: 20,
            loop: true,
            responsive : {
                0: {
                    items: 2,
                },
                768: {
                    items: 3,
                }
            }
        });
    });
    
    $(document).ready(function(){
        $(\'input.phone\').mask(\'+0 (000) 000-00-00\');
        
        $(\'.openModal\').on(\'click\', function(e) {
            e.preventDefault();
            $(\'#modalWindow\').show();
        });
        
        $(\'.openModalPolicy\').on(\'click\', function(e) {
            e.preventDefault();
            $(\'#modalPolicy\').show();
        });
        
        $(\'span.close\').on(\'click\', function() {
            $(\'#modalWindow\').hide();
            $(\'#modalPolicy\').hide();
        });
        
        $(\'#modalWindow, #modalPolicy\').on(\'click\', function(event) {
            if (event.target == document.getElementById("modalWindow") || event.target == document.getElementById("modalPolicy")) {
                $(\'#modalWindow\').hide();
                $(\'#modalPolicy\').hide();
            }
        });
    });
</script>
    </body>
</html>',
    '_isForward' => false,
    '_sjscripts' => 
    array (
      0 => '<link rel="canonical" href="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/stati/"/>',
    ),
    '_loadedjscripts' => 
    array (
      '<link rel="canonical" href="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/stati/"/>' => true,
    ),
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[~2? &scheme=`full`]]' => 'http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/stati/',
    '[[$schema.org]]' => '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "name": "Статьи",
        "image": "http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png",
        "author": "санэпид-служба.рф",
        "headline": "Статьи",
        "dateModified": "2020-12-25 01:12:00",
        "datePublished": "2020-12-25 01:12:00",
        "publisher": {
            "@type": "Organization",
            "name": "[[+domain_name]]",
            "logo": {
                "@type": "ImageObject",
                "url": "http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png",
                "width": "118",
                "height": "107"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/stati/"
        }
    }
</script>
<meta property="og:locale" content="ru_RU" />
<meta property="og:site_name" content="Статьи">
<meta property="og:title" content="Статьи" />
<meta property="og:description" content="" />
<meta property="og:url" content="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/stati/" />
<meta property="og:type" content="article" />
<meta property="og:image" content="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png" />
<meta property="og:image:secure_url" content="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png" />
<meta property="article:published_time" content="2020-12-25 01:12:00" />',
    '[[$head]]' => '<title>Статьи - MODX Revolution</title>
<base href="[[!++site_url]]" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="./assets/fonts/awesome/v5.15.1/css/all.min.css" />

<link rel="stylesheet" href="./assets/css/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="./assets/css/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="./assets/css/owl-carousel/owl-nav.css">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<link rel="stylesheet" href="./assets/css/jquery.fancybox.min.css">
    
<link rel="stylesheet" href="./assets/css/main.css" />

<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "name": "Статьи",
        "image": "http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png",
        "author": "санэпид-служба.рф",
        "headline": "Статьи",
        "dateModified": "2020-12-25 01:12:00",
        "datePublished": "2020-12-25 01:12:00",
        "publisher": {
            "@type": "Organization",
            "name": "[[+domain_name]]",
            "logo": {
                "@type": "ImageObject",
                "url": "http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png",
                "width": "118",
                "height": "107"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/stati/"
        }
    }
</script>
<meta property="og:locale" content="ru_RU" />
<meta property="og:site_name" content="Статьи">
<meta property="og:title" content="Статьи" />
<meta property="og:description" content="" />
<meta property="og:url" content="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/stati/" />
<meta property="og:type" content="article" />
<meta property="og:image" content="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png" />
<meta property="og:image:secure_url" content="http://xn----7sbbdnnl0aoutg1a7k.xn--p1ai/assets/images/logo.png" />
<meta property="article:published_time" content="2020-12-25 01:12:00" />',
    '[[$mobile-menu]]' => '<div id="navSidebar" class="nav-sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="left-sidebar">
        [[!pdoMenu?
            &parents=`7`
            &level=`2`
            &tplOuter=`@INLINE <div>[[+wrapper]]</div>`
            &tpl=`@INLINE <div class="accordionMenu"><h5 class="accordion">[[+menutitle]]</h5>[[+wrapper]]</div>`
                &-tplHere=`@INLINE <li class="nav-item active"><a href="[[+link]]" [[+attributes]] class="nav-link">[[+menutitle]] 3</a>[[+wrapper]]</li>`
            &tplParentRow=`@INLINE <div class="accordionMenu"><h5 class="accordion">[[+menutitle]]</h5>[[+wrapper]]</div>`
            &tplInner=`@INLINE <div class="panel">[[+wrapper]]</div>`
            &tplInnerRow=`@INLINE <a href="[[+link]]">[[+menutitle]]</a>`
                &-tplInnerHere=`@INLINE <a class="dropdown-item" href="[[+link]]">[[+menutitle]] 2</a>`
        ]]
        
            <div class="corona">
                <div class="b-block">
                    <a href="koronavirus.html">Коронавирус</a>
                </div>
            </div>
        
        
            <div class="org">
                <div class="b-block">
                    <a href="organizacziyam.html">Организациям</a>
                </div>
            </div>
        
        
            <div class="prepare">
                <div class="lr-block">
                    <img src="assets/images/prepare-icon.svg" alt="Подготовка к обработке" />
                    <a href="podgotovka-k-obrabotke.html">Подготовка к обработке</a>
                </div>
            </div>    
        
        
            <div class="order">
                <div class="r-block">
                    <img src="assets/images/dogovor_icon.png" alt="Заключить договор" />
                    <a href="/">Заключить договор</a>
                </div>
            </div>    
        
    </div>
</div>',
    '[[pdoMenu?
                    &parents=`0`
                    &level=`1`
                    &showUnpublished=`1`
                ]]' => '<ul class=""><li class="first"><a href="kontaktyi.html" >Контакты</a></li><li class="active"><a href="stati/" >Статьи</a></li><li><a href="dokumentyi.html" >Документы</a></li><li><a href="otzyivyi/" >Отзывы</a></li><li class="last"><a href="vakansii/" >Вакансии</a></li></ul>',
    '[[$header]]' => '<header>
    <div class="container">
        <div class="topline">
            <div class="logo">
                <a href="/">
                    <img src="/assets/images/logo.png" alt="САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА" />
                    <span>
                        САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА
                    </span>
                </a>
            </div>
            <div>
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Москва</span>
                </div>
                <div class="search">
                    [[!SimpleSearchForm? &landing=`41` &tpl=`form.formSearch`]]
                </div>
                <div class="phone">
                    <a href="tel:">8 (951) 79-38-397</a>
                </div>
            </div>
        </div>
        <div class="topline mobile">
            <div class="header">
                <a href="/">
                    <img src="/assets/images/logo.png" alt="САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА" />
                </a>
                <div>
                    <a href="/">
                        <span>
                            САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА
                        </span>
                    </a>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Москва</span>
                    </div>
                </div>
                <div class="menu-btn">
                    <button onclick="openNav();"><i class="fas fa-bars"></i> Меню</button>
                </div>
            </div>
            <div class="search">
                [[!SimpleSearchForm? &landing=`41` &tpl=`form.formSearch`]]
            </div>
        </div>
        <div class="navigation">
            <div class="nav">
                <a href="/" class="link-home">
                    <i class="fas fa-home"></i>
                </a>
                <ul class=""><li class="first"><a href="kontaktyi.html" >Контакты</a></li><li class="active"><a href="stati/" >Статьи</a></li><li><a href="dokumentyi.html" >Документы</a></li><li><a href="otzyivyi/" >Отзывы</a></li><li class="last"><a href="vakansii/" >Вакансии</a></li></ul>
            </div>
            <div class="callback animate">
                <a href="" class="openModal">Заказать звонок</a>
            </div>
        </div>
    </div>
</header>',
    '[[pdoMenu?
                            &parents=`0`
                            &level=`1`
                            &showUnpublished=`1`
                        ]]' => '<ul class=""><li class="first"><a href="kontaktyi.html" >Контакты</a></li><li class="active"><a href="stati/" >Статьи</a></li><li><a href="dokumentyi.html" >Документы</a></li><li><a href="otzyivyi/" >Отзывы</a></li><li class="last"><a href="vakansii/" >Вакансии</a></li></ul>',
    '[[pdoCrumbs?
        &outputSeparator=`&nbsp;/&nbsp;`
        &showHome=`1`
        &exclude=`7`
    ]]' => '<ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Главная</a></li>&nbsp;/&nbsp;<li class="breadcrumb-item active">Статьи</li></ol>',
    '[[$breadcrumbs]]' => '<div class="breadcrumbs">
    <ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Главная</a></li>&nbsp;/&nbsp;<li class="breadcrumb-item active">Статьи</li></ol>
</div>',
    '[[pdoResources?tpl=`tpl.ListArticles`&returnIds=``&showLog=``&fastMode=``&sortby=`publishedon`&sortbyTV=``&sortbyTVType=``&sortdir=`DESC`&sortdirTV=`ASC`&limit=`10`&offset=`0`&depth=`1`&outputSeparator=`
`&toPlaceholder=``&parents=`2`&includeContent=``&includeTVs=`image`&prepareTVs=`1`&processTVs=``&tvPrefix=`tv.`&tvFilters=``&tvFiltersAndDelimiter=`,`&tvFiltersOrDelimiter=`||`&where=``&showUnpublished=``&showDeleted=``&showHidden=`1`&hideContainers=``&context=``&idx=``&first=``&last=``&tplFirst=``&tplLast=``&tplOdd=``&tplWrapper=``&wrapIfEmpty=``&totalVar=`page.total`&resources=``&tplCondition=``&tplOperator=`==`&conditionalTpls=``&select=``&toSeparatePlaceholders=``&loadModels=``&scheme=``&useWeblinkUrl=``&plPrefix=``&maxLimit=`100`&page=`1`&pageVarKey=`page`&pageLimit=`5`&element=`pdoResources`&pageNavVar=`page.nav`&pageCountVar=`pageCount`&pageLinkScheme=``&tplPage=`@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[+pageNo]]</a></li>`&tplPageWrapper=`@INLINE <ul class="pagination">[[+first]][[+prev]][[+pages]][[+next]][[+last]]</ul>`&tplPageActive=`@INLINE <li class="page-item active"><a class="page-link" href="[[+href]]">[[+pageNo]]</a></li>`&tplPageFirst=`@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[%pdopage_first]]</a></li>`&tplPageLast=`@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[%pdopage_last]]</a></li>`&tplPagePrev=`@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">&laquo;</a></li>`&tplPageNext=`@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">&raquo;</a></li>`&tplPageSkip=`@INLINE <li class="page-item disabled"><a class="page-link" href="#">...</a></li>`&tplPageFirstEmpty=`@INLINE <li class="page-item disabled"><a class="page-link" href="#">[[%pdopage_first]]</a></li>`&tplPageLastEmpty=`@INLINE <li class="page-item disabled"><a class="page-link" href="#">[[%pdopage_last]]</a></li>`&tplPagePrevEmpty=`@INLINE <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>`&tplPageNextEmpty=`@INLINE <li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>`&cache=``&cacheTime=`3600`&cacheAnonymous=``&ajax=``&ajaxMode=``&ajaxElemWrapper=`#pdopage`&ajaxElemRows=`#pdopage .rows`&ajaxElemPagination=`#pdopage .pagination`&ajaxElemLink=`#pdopage .pagination a`&ajaxElemMore=`#pdopage .btn-more`&ajaxTplMore=`@INLINE <button class="btn btn-primary btn-more">[[%pdopage_more]]</button>`&ajaxHistory=``&setMeta=`1`&strictMode=`1`&request=`e1859a21866b91b175450be4f2b5c332`&setTotal=`1`]]' => '<div class="card">
    <div class="card-header">
        <h3><a href="ximiya-dlya-dezinfekczii-bez-zapaxa-ili-s-zapaxom.html">Химия для дезинфекции без запаха или с запахом?</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="ximiya-dlya-dezinfekczii-bez-zapaxa-ili-s-zapaxom.html" class="btn-red">читать далее</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3><a href="travlya-tarakanov-samostoyatelno-svoimi-silami.html">Травля тараканов самостоятельно своими силами</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="travlya-tarakanov-samostoyatelno-svoimi-silami.html" class="btn-red">читать далее</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3><a href="chto-delat-posle-obrabotki-i-nadolgo-li-ostanetsya-zapax.html">Химия для дезинфекции без запаха или с запахом?</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="chto-delat-posle-obrabotki-i-nadolgo-li-ostanetsya-zapax.html" class="btn-red">читать далее</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3><a href="professionalnoe-unichtozhenie-klopov-garantiruet-100-rezultat.html">Травля тараканов самостоятельно своими силами</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="professionalnoe-unichtozhenie-klopov-garantiruet-100-rezultat.html" class="btn-red">читать далее</a>
    </div>
</div>',
    '[[pdoPage?
                            &parents=`2`
                            &depth=`1`
                            &includeTVs=`image`
                            &tpl=`tpl.ListArticles`
                        ]]' => '<div class="card">
    <div class="card-header">
        <h3><a href="ximiya-dlya-dezinfekczii-bez-zapaxa-ili-s-zapaxom.html">Химия для дезинфекции без запаха или с запахом?</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="ximiya-dlya-dezinfekczii-bez-zapaxa-ili-s-zapaxom.html" class="btn-red">читать далее</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3><a href="travlya-tarakanov-samostoyatelno-svoimi-silami.html">Травля тараканов самостоятельно своими силами</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="travlya-tarakanov-samostoyatelno-svoimi-silami.html" class="btn-red">читать далее</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3><a href="chto-delat-posle-obrabotki-i-nadolgo-li-ostanetsya-zapax.html">Химия для дезинфекции без запаха или с запахом?</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="chto-delat-posle-obrabotki-i-nadolgo-li-ostanetsya-zapax.html" class="btn-red">читать далее</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3><a href="professionalnoe-unichtozhenie-klopov-garantiruet-100-rezultat.html">Травля тараканов самостоятельно своими силами</a></h3>
        <p>25.12.2020</p>
    </div>
    <div class="card-body">
        <img src="assets/images/article.jpg" />
        <p>Все проблемы, связанные с зараженностью жилья насекомыми, мелкими грызунами, микроорганизмами  решаетсанэпидемстанция, официальный сайт службы Дезер содержит информацию об услугах службы, стоимости и методах&#8230;</p>
    </div>
    <div class="card-footer">
        <a href="professionalnoe-unichtozhenie-klopov-garantiruet-100-rezultat.html" class="btn-red">читать далее</a>
    </div>
</div>',
    '[[$footer]]' => '<div class="container">
    <div class="footer">
        <div class="menu">
            <h5>Меню</h5>
            <ul>
                <li>
                    <a href="#">О компании</a>
                </li>
                <li>
                    <a href="#">Наши работы</a>
                </li>
                <li>
                    <a href="#">Отзывы</a>
                </li>
                <li>
                    <a href="#">Обратная связь</a>
                </li>
                <li>
                    <a href="#">Карта сайта</a>
                </li>
            </ul>
        </div>
        <div class="contacts">
            <h5>Наши контакты</h5>
            <div class="address">
                <p>
                     Большой бульвар, 2
                </p>
            </div>
            <div class="phone">
                <p class="desktop">
                   тел: 8 (951) 79-38-397
                </p>
                <p class="mobile">
                    <a href="tel:89517938397">8 (951) 79-38-397</a>
                    <a href="tel:89517938397">8 (951) 79-38-397</a>
                </p>
                <p class="time">
                    24/7
                </p>
            </div>
            <div class="email">
                <a href="mailto:klop.online@yandex.ru">klop.online@yandex.ru</a>
            </div>
        </div>
        <div class="requisites-block">
            <div class="logo">
                <a href="/">
                    <img src="/assets/images/logo.png" alt="САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА" />
                    <span>
                        САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА
                    </span>
                </a>
            </div>
            <div class="requisites">
                <p>
                   САНИТАРНО ЭПИДЕМИОЛОГИЧЕСКАЯ СЛУЖБА 
                </p>
                <p>
                    ИНН: 125454564654646
                </p>
                <p>
                    ОГРН: 45464646
                </p>
            </div>
            <div class="social">
                <a href="vibre"><img src="./assets/images/viber.svg" alt="viber" /></a>
                <a href="whatsapp"><img src="./assets/images/whatsapp.svg" alt="whatsapp" /></a>
                <a href="insta"><img src="./assets/images/instagram.svg" alt="instagram" /></a>
                <a href="fb"><img src="./assets/images/facebook.svg" alt="facebook" /></a>
                <a href="vk"><img src="./assets/images/vk.svg" alt="vk" /></a>
                <a href="ok"><img src="./assets/images/odnoklassniki.svg" alt="odnoklassniki" /></a>
            </div>
            <div class="policy">
                <a href="" class="openModalPolicy">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</div>',
    '[[$scripts]]' => '<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/jquery.mask.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/jquery.fancybox.min.js"></script>
<script src="./assets/js/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    function openNav() {
        document.getElementById("navSidebar").style.width = "80%";
    }
    function closeNav() {
        document.getElementById("navSidebar").style.width = "0";
    }

    var acc = document.getElementsByClassName("accordion");
    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
    
    $(document).ready(function(){
        $(\'.clients\').slick({
            slidesToShow: 3,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 0,
            cssEase: \'linear\',
            speed: 2000,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 577,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 325,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });

    $(document).ready(function() {
        $(document).scroll(function() {
            if ($(document).scrollTop() > 170) {
                $(\'.sticky-nav\').addClass(\'show\');
            } else {
                $(\'.sticky-nav\').removeClass(\'show\');
            }
        });
        $(\'.list-news .toggle\').on(\'click\', function() {
            $(this).toggleClass(\'active\').siblings(\'a\').toggleClass(\'show\');
        });
        
        $(\'.card\').on(\'mouseover\', function() {
            $(this).children(\'.card-overlay\').show();
        });

        $(\'.card\').on(\'mouseout\', function() {
            $(this).children(\'.card-overlay\').hide();
        });

        $(\'.carouselReviews\').owlCarousel({
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            items: 3,
            responsive: {
                0: {
                    items: 1,
                    margin: 20,
                    stagePadding: 20,
                },
                425: {
                    items: 1,
                    loop: true,
                    margin: 20,
                    stagePadding: 90,
                },
                600: {
                    items: 1,
                    loop: true,
                    margin: 30,
                    stagePadding: 130,
                },
                768: {
                    loop: true,
                    items: 1,
                    margin: 30,
                    stagePadding: 220,
                },
                800: {
                    loop: true,
                    items: 1,
                    margin: 30,
                    stagePadding: 220,
                },
                1024: {
                    loop: true,
                    items: 1,
                    margin: 50,
                    stagePadding: 320,
                },
                1280: {
                    nav: true,
                    dots: false,
                    autoplay: false,
                    margin: 30,
                    items: 3,
                }
            }
        });

        $(\'.carouselSpecialists\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });
        
        $(\'.carouselNews\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselOurWorks\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselEquipments\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselChemical\').owlCarousel({
            autoplay: true,
            items: 1,
        });

        $(\'.carouselCertificates\').owlCarousel({
            items: 4,
            dots: false,
            nav: false,
            autoplay: false,
            margin: 10,
            loop: true,
            responsive : {
                0: {
                    items: 2,
                    dots: true,
                },
                768: {
                    items: 3,
                    nav: true,
                },
                1280: {
                    items: 4,
                    nav: true,
                }
            }
        });

        $(\'.carouselClients\').owlCarousel({
            items: 3,
            dots: false,
            nav: false,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplaySpeed: 4000,
            margin: 20,
            loop: true,
            responsive : {
                0: {
                    items: 2,
                },
                768: {
                    items: 3,
                }
            }
        });
    });
    
    $(document).ready(function(){
        $(\'input.phone\').mask(\'+0 (000) 000-00-00\');
        
        $(\'.openModal\').on(\'click\', function(e) {
            e.preventDefault();
            $(\'#modalWindow\').show();
        });
        
        $(\'.openModalPolicy\').on(\'click\', function(e) {
            e.preventDefault();
            $(\'#modalPolicy\').show();
        });
        
        $(\'span.close\').on(\'click\', function() {
            $(\'#modalWindow\').hide();
            $(\'#modalPolicy\').hide();
        });
        
        $(\'#modalWindow, #modalPolicy\').on(\'click\', function(event) {
            if (event.target == document.getElementById("modalWindow") || event.target == document.getElementById("modalPolicy")) {
                $(\'#modalWindow\').hide();
                $(\'#modalPolicy\').hide();
            }
        });
    });
</script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<title>[[*pagetitle]] - [[++site_name]]</title>
<base href="[[!++site_url]]" />
<meta charset="[[++modx_charset]]" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="./assets/fonts/awesome/v5.15.1/css/all.min.css" />

<link rel="stylesheet" href="./assets/css/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="./assets/css/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="./assets/css/owl-carousel/owl-nav.css">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<link rel="stylesheet" href="./assets/css/jquery.fancybox.min.css">
    
<link rel="stylesheet" href="./assets/css/main.css" />

<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

[[$schema.org]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<title>[[*pagetitle]] - [[++site_name]]</title>
<base href="[[!++site_url]]" />
<meta charset="[[++modx_charset]]" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="./assets/fonts/awesome/v5.15.1/css/all.min.css" />

<link rel="stylesheet" href="./assets/css/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="./assets/css/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="./assets/css/owl-carousel/owl-nav.css">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<link rel="stylesheet" href="./assets/css/jquery.fancybox.min.css">
    
<link rel="stylesheet" href="./assets/css/main.css" />

<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

[[$schema.org]]',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'schema.org' => 
      array (
        'fields' => 
        array (
          'id' => 49,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'schema.org',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "name": "[[*pagetitle:default=`[[*longtitle]]`]]",
        "image": "[[++site_url]]assets/images/logo.png",
        "author": "[[++domain_name]]",
        "headline": "[[*pagetitle:default=`[[*longtitle]]`]]",
        "dateModified": "[[*publishedon]]",
        "datePublished": "[[*publishedon]]",
        "publisher": {
            "@type": "Organization",
            "name": "[[+domain_name]]",
            "logo": {
                "@type": "ImageObject",
                "url": "[[++site_url]]assets/images/logo.png",
                "width": "118",
                "height": "107"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "[[~[[*id]]? &scheme=`full`]]"
        }
    }
</script>
<meta property="og:locale" content="ru_RU" />
<meta property="og:site_name" content="[[*pagetitle:dafeult=`[[*longtitle]]`]]">
<meta property="og:title" content="[[*pagetitle:dafeult=`[[*longtitle]]`]]" />
<meta property="og:description" content="[[*description]]" />
<meta property="og:url" content="[[~[[*id]]? &scheme=`full`]]" />
<meta property="og:type" content="article" />
<meta property="og:image" content="[[++site_url]]assets/images/logo.png" />
<meta property="og:image:secure_url" content="[[++site_url]]assets/images/logo.png" />
<meta property="article:published_time" content="[[*publishedon]]" />',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "name": "[[*pagetitle:default=`[[*longtitle]]`]]",
        "image": "[[++site_url]]assets/images/logo.png",
        "author": "[[++domain_name]]",
        "headline": "[[*pagetitle:default=`[[*longtitle]]`]]",
        "dateModified": "[[*publishedon]]",
        "datePublished": "[[*publishedon]]",
        "publisher": {
            "@type": "Organization",
            "name": "[[+domain_name]]",
            "logo": {
                "@type": "ImageObject",
                "url": "[[++site_url]]assets/images/logo.png",
                "width": "118",
                "height": "107"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "[[~[[*id]]? &scheme=`full`]]"
        }
    }
</script>
<meta property="og:locale" content="ru_RU" />
<meta property="og:site_name" content="[[*pagetitle:dafeult=`[[*longtitle]]`]]">
<meta property="og:title" content="[[*pagetitle:dafeult=`[[*longtitle]]`]]" />
<meta property="og:description" content="[[*description]]" />
<meta property="og:url" content="[[~[[*id]]? &scheme=`full`]]" />
<meta property="og:type" content="article" />
<meta property="og:image" content="[[++site_url]]assets/images/logo.png" />
<meta property="og:image:secure_url" content="[[++site_url]]assets/images/logo.png" />
<meta property="article:published_time" content="[[*publishedon]]" />',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'mobile-menu' => 
      array (
        'fields' => 
        array (
          'id' => 26,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mobile-menu',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div id="navSidebar" class="nav-sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="left-sidebar">
        [[!pdoMenu?
            &parents=`7`
            &level=`2`
            &tplOuter=`@INLINE <div>[[+wrapper]]</div>`
            &tpl=`@INLINE <div class="accordionMenu"><h5 class="accordion">[[+menutitle]]</h5>[[+wrapper]]</div>`
                &-tplHere=`@INLINE <li class="nav-item active"><a href="[[+link]]" [[+attributes]] class="nav-link">[[+menutitle]] 3</a>[[+wrapper]]</li>`
            &tplParentRow=`@INLINE <div class="accordionMenu"><h5 class="accordion">[[+menutitle]]</h5>[[+wrapper]]</div>`
            &tplInner=`@INLINE <div class="panel">[[+wrapper]]</div>`
            &tplInnerRow=`@INLINE <a href="[[+link]]">[[+menutitle]]</a>`
                &-tplInnerHere=`@INLINE <a class="dropdown-item" href="[[+link]]">[[+menutitle]] 2</a>`
        ]]
        [[#1.show_corona_btn:is=`1`:then=`
            <div class="corona">
                <div class="b-block">
                    <a href="[[~[[#1.corona_btn_url]]]]">[[#1.corona_btn_title]]</a>
                </div>
            </div>
        `]]
        [[#1.show_org_btn:is=`1`:then=`
            <div class="org">
                <div class="b-block">
                    <a href="[[~[[#1.org_btn_url]]]]">[[#1.org_btn_title]]</a>
                </div>
            </div>
        `]]
        [[#1.show_prepare_btn:is=`1`:then=`
            <div class="prepare">
                <div class="lr-block">
                    <img src="[[#1.prepare_btn_icon]]" alt="[[#1.prepare_btn_title]]" />
                    <a href="[[~[[#1.prepare_btn_url]]]]">[[#1.prepare_btn_title]]</a>
                </div>
            </div>    
        `]]
        [[#1.show_order_btn:is=`1`:then=`
            <div class="order">
                <div class="r-block">
                    <img src="[[#1.order_btn_icon]]" alt="[[#1.order_btn_title]]" />
                    <a href="[[~[[#1.order_btn_url]]]]">[[#1.order_btn_title]]</a>
                </div>
            </div>    
        `]]
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div id="navSidebar" class="nav-sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="left-sidebar">
        [[!pdoMenu?
            &parents=`7`
            &level=`2`
            &tplOuter=`@INLINE <div>[[+wrapper]]</div>`
            &tpl=`@INLINE <div class="accordionMenu"><h5 class="accordion">[[+menutitle]]</h5>[[+wrapper]]</div>`
                &-tplHere=`@INLINE <li class="nav-item active"><a href="[[+link]]" [[+attributes]] class="nav-link">[[+menutitle]] 3</a>[[+wrapper]]</li>`
            &tplParentRow=`@INLINE <div class="accordionMenu"><h5 class="accordion">[[+menutitle]]</h5>[[+wrapper]]</div>`
            &tplInner=`@INLINE <div class="panel">[[+wrapper]]</div>`
            &tplInnerRow=`@INLINE <a href="[[+link]]">[[+menutitle]]</a>`
                &-tplInnerHere=`@INLINE <a class="dropdown-item" href="[[+link]]">[[+menutitle]] 2</a>`
        ]]
        [[#1.show_corona_btn:is=`1`:then=`
            <div class="corona">
                <div class="b-block">
                    <a href="[[~[[#1.corona_btn_url]]]]">[[#1.corona_btn_title]]</a>
                </div>
            </div>
        `]]
        [[#1.show_org_btn:is=`1`:then=`
            <div class="org">
                <div class="b-block">
                    <a href="[[~[[#1.org_btn_url]]]]">[[#1.org_btn_title]]</a>
                </div>
            </div>
        `]]
        [[#1.show_prepare_btn:is=`1`:then=`
            <div class="prepare">
                <div class="lr-block">
                    <img src="[[#1.prepare_btn_icon]]" alt="[[#1.prepare_btn_title]]" />
                    <a href="[[~[[#1.prepare_btn_url]]]]">[[#1.prepare_btn_title]]</a>
                </div>
            </div>    
        `]]
        [[#1.show_order_btn:is=`1`:then=`
            <div class="order">
                <div class="r-block">
                    <img src="[[#1.order_btn_icon]]" alt="[[#1.order_btn_title]]" />
                    <a href="[[~[[#1.order_btn_url]]]]">[[#1.order_btn_title]]</a>
                </div>
            </div>    
        `]]
    </div>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<header>
    <div class="container">
        <div class="topline">
            <div class="logo">
                <a href="/">
                    <img src="[[++logo]]" alt="[[++company]]" />
                    <span>
                        [[++company]]
                    </span>
                </a>
            </div>
            <div>
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Москва</span>
                </div>
                <div class="search">
                    [[!SimpleSearchForm? &landing=`41` &tpl=`form.formSearch`]]
                </div>
                <div class="phone">
                    <a href="tel:[[+phone:tel]]">[[++phone]]</a>
                </div>
            </div>
        </div>
        <div class="topline mobile">
            <div class="header">
                <a href="/">
                    <img src="[[++logo]]" alt="[[++company]]" />
                </a>
                <div>
                    <a href="/">
                        <span>
                            [[++company]]
                        </span>
                    </a>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Москва</span>
                    </div>
                </div>
                <div class="menu-btn">
                    <button onclick="openNav();"><i class="fas fa-bars"></i> Меню</button>
                </div>
            </div>
            <div class="search">
                [[!SimpleSearchForm? &landing=`41` &tpl=`form.formSearch`]]
            </div>
        </div>
        <div class="navigation">
            <div class="nav">
                <a href="/" class="link-home">
                    <i class="fas fa-home"></i>
                </a>
                [[pdoMenu?
                    &parents=`0`
                    &level=`1`
                    &showUnpublished=`1`
                ]]
            </div>
            <div class="callback animate">
                <a href="" class="openModal">Заказать звонок</a>
            </div>
        </div>
    </div>
</header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header>
    <div class="container">
        <div class="topline">
            <div class="logo">
                <a href="/">
                    <img src="[[++logo]]" alt="[[++company]]" />
                    <span>
                        [[++company]]
                    </span>
                </a>
            </div>
            <div>
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Москва</span>
                </div>
                <div class="search">
                    [[!SimpleSearchForm? &landing=`41` &tpl=`form.formSearch`]]
                </div>
                <div class="phone">
                    <a href="tel:[[+phone:tel]]">[[++phone]]</a>
                </div>
            </div>
        </div>
        <div class="topline mobile">
            <div class="header">
                <a href="/">
                    <img src="[[++logo]]" alt="[[++company]]" />
                </a>
                <div>
                    <a href="/">
                        <span>
                            [[++company]]
                        </span>
                    </a>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Москва</span>
                    </div>
                </div>
                <div class="menu-btn">
                    <button onclick="openNav();"><i class="fas fa-bars"></i> Меню</button>
                </div>
            </div>
            <div class="search">
                [[!SimpleSearchForm? &landing=`41` &tpl=`form.formSearch`]]
            </div>
        </div>
        <div class="navigation">
            <div class="nav">
                <a href="/" class="link-home">
                    <i class="fas fa-home"></i>
                </a>
                [[pdoMenu?
                    &parents=`0`
                    &level=`1`
                    &showUnpublished=`1`
                ]]
            </div>
            <div class="callback animate">
                <a href="" class="openModal">Заказать звонок</a>
            </div>
        </div>
    </div>
</header>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'breadcrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 30,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'breadcrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="breadcrumbs">
    [[pdoCrumbs?
        &outputSeparator=`&nbsp;/&nbsp;`
        &showHome=`1`
        &exclude=`7`
    ]]
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="breadcrumbs">
    [[pdoCrumbs?
        &outputSeparator=`&nbsp;/&nbsp;`
        &showHome=`1`
        &exclude=`7`
    ]]
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="container">
    <div class="footer">
        <div class="menu">
            <h5>Меню</h5>
            <ul>
                <li>
                    <a href="#">О компании</a>
                </li>
                <li>
                    <a href="#">Наши работы</a>
                </li>
                <li>
                    <a href="#">Отзывы</a>
                </li>
                <li>
                    <a href="#">Обратная связь</a>
                </li>
                <li>
                    <a href="#">Карта сайта</a>
                </li>
            </ul>
        </div>
        <div class="contacts">
            <h5>Наши контакты</h5>
            <div class="address">
                <p>
                    [[++address]]
                </p>
            </div>
            <div class="phone">
                <p class="desktop">
                   тел: [[++phone]]
                </p>
                <p class="mobile">
                    <a href="tel:[[++phone1:tel]]">[[++phone1]]</a>
                    <a href="tel:[[++phone2:tel]]">[[++phone2]]</a>
                </p>
                <p class="time">
                    [[++working_hours]]
                </p>
            </div>
            <div class="email">
                <a href="mailto:[[++email]]">[[++email]]</a>
            </div>
        </div>
        <div class="requisites-block">
            <div class="logo">
                <a href="/">
                    <img src="[[++logo]]" alt="[[++company]]" />
                    <span>
                        [[++company]]
                    </span>
                </a>
            </div>
            <div class="requisites">
                <p>
                   [[++company]] 
                </p>
                <p>
                    ИНН: [[++inn]]
                </p>
                <p>
                    ОГРН: [[++ogrn]]
                </p>
            </div>
            <div class="social">
                <a href="[[++viber]]"><img src="./assets/images/viber.svg" alt="viber" /></a>
                <a href="[[++whatsapp]]"><img src="./assets/images/whatsapp.svg" alt="whatsapp" /></a>
                <a href="[[++instagram]]"><img src="./assets/images/instagram.svg" alt="instagram" /></a>
                <a href="[[++facebook]]"><img src="./assets/images/facebook.svg" alt="facebook" /></a>
                <a href="[[++vk]]"><img src="./assets/images/vk.svg" alt="vk" /></a>
                <a href="[[++ok]]"><img src="./assets/images/odnoklassniki.svg" alt="odnoklassniki" /></a>
            </div>
            <div class="policy">
                <a href="" class="openModalPolicy">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="container">
    <div class="footer">
        <div class="menu">
            <h5>Меню</h5>
            <ul>
                <li>
                    <a href="#">О компании</a>
                </li>
                <li>
                    <a href="#">Наши работы</a>
                </li>
                <li>
                    <a href="#">Отзывы</a>
                </li>
                <li>
                    <a href="#">Обратная связь</a>
                </li>
                <li>
                    <a href="#">Карта сайта</a>
                </li>
            </ul>
        </div>
        <div class="contacts">
            <h5>Наши контакты</h5>
            <div class="address">
                <p>
                    [[++address]]
                </p>
            </div>
            <div class="phone">
                <p class="desktop">
                   тел: [[++phone]]
                </p>
                <p class="mobile">
                    <a href="tel:[[++phone1:tel]]">[[++phone1]]</a>
                    <a href="tel:[[++phone2:tel]]">[[++phone2]]</a>
                </p>
                <p class="time">
                    [[++working_hours]]
                </p>
            </div>
            <div class="email">
                <a href="mailto:[[++email]]">[[++email]]</a>
            </div>
        </div>
        <div class="requisites-block">
            <div class="logo">
                <a href="/">
                    <img src="[[++logo]]" alt="[[++company]]" />
                    <span>
                        [[++company]]
                    </span>
                </a>
            </div>
            <div class="requisites">
                <p>
                   [[++company]] 
                </p>
                <p>
                    ИНН: [[++inn]]
                </p>
                <p>
                    ОГРН: [[++ogrn]]
                </p>
            </div>
            <div class="social">
                <a href="[[++viber]]"><img src="./assets/images/viber.svg" alt="viber" /></a>
                <a href="[[++whatsapp]]"><img src="./assets/images/whatsapp.svg" alt="whatsapp" /></a>
                <a href="[[++instagram]]"><img src="./assets/images/instagram.svg" alt="instagram" /></a>
                <a href="[[++facebook]]"><img src="./assets/images/facebook.svg" alt="facebook" /></a>
                <a href="[[++vk]]"><img src="./assets/images/vk.svg" alt="vk" /></a>
                <a href="[[++ok]]"><img src="./assets/images/odnoklassniki.svg" alt="odnoklassniki" /></a>
            </div>
            <div class="policy">
                <a href="" class="openModalPolicy">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'scripts' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/jquery.mask.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/jquery.fancybox.min.js"></script>
<script src="./assets/js/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    function openNav() {
        document.getElementById("navSidebar").style.width = "80%";
    }
    function closeNav() {
        document.getElementById("navSidebar").style.width = "0";
    }

    var acc = document.getElementsByClassName("accordion");
    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
    
    $(document).ready(function(){
        $(\'.clients\').slick({
            slidesToShow: 3,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 0,
            cssEase: \'linear\',
            speed: 2000,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 577,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 325,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });

    $(document).ready(function() {
        $(document).scroll(function() {
            if ($(document).scrollTop() > 170) {
                $(\'.sticky-nav\').addClass(\'show\');
            } else {
                $(\'.sticky-nav\').removeClass(\'show\');
            }
        });
        $(\'.list-news .toggle\').on(\'click\', function() {
            $(this).toggleClass(\'active\').siblings(\'a\').toggleClass(\'show\');
        });
        
        $(\'.card\').on(\'mouseover\', function() {
            $(this).children(\'.card-overlay\').show();
        });

        $(\'.card\').on(\'mouseout\', function() {
            $(this).children(\'.card-overlay\').hide();
        });

        $(\'.carouselReviews\').owlCarousel({
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            items: 3,
            responsive: {
                0: {
                    items: 1,
                    margin: 20,
                    stagePadding: 20,
                },
                425: {
                    items: 1,
                    loop: true,
                    margin: 20,
                    stagePadding: 90,
                },
                600: {
                    items: 1,
                    loop: true,
                    margin: 30,
                    stagePadding: 130,
                },
                768: {
                    loop: true,
                    items: 1,
                    margin: 30,
                    stagePadding: 220,
                },
                800: {
                    loop: true,
                    items: 1,
                    margin: 30,
                    stagePadding: 220,
                },
                1024: {
                    loop: true,
                    items: 1,
                    margin: 50,
                    stagePadding: 320,
                },
                1280: {
                    nav: true,
                    dots: false,
                    autoplay: false,
                    margin: 30,
                    items: 3,
                }
            }
        });

        $(\'.carouselSpecialists\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });
        
        $(\'.carouselNews\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselOurWorks\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselEquipments\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselChemical\').owlCarousel({
            autoplay: true,
            items: 1,
        });

        $(\'.carouselCertificates\').owlCarousel({
            items: 4,
            dots: false,
            nav: false,
            autoplay: false,
            margin: 10,
            loop: true,
            responsive : {
                0: {
                    items: 2,
                    dots: true,
                },
                768: {
                    items: 3,
                    nav: true,
                },
                1280: {
                    items: 4,
                    nav: true,
                }
            }
        });

        $(\'.carouselClients\').owlCarousel({
            items: 3,
            dots: false,
            nav: false,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplaySpeed: 4000,
            margin: 20,
            loop: true,
            responsive : {
                0: {
                    items: 2,
                },
                768: {
                    items: 3,
                }
            }
        });
    });
    
    $(document).ready(function(){
        $(\'input.phone\').mask(\'+0 (000) 000-00-00\');
        
        $(\'.openModal\').on(\'click\', function(e) {
            e.preventDefault();
            $(\'#modalWindow\').show();
        });
        
        $(\'.openModalPolicy\').on(\'click\', function(e) {
            e.preventDefault();
            $(\'#modalPolicy\').show();
        });
        
        $(\'span.close\').on(\'click\', function() {
            $(\'#modalWindow\').hide();
            $(\'#modalPolicy\').hide();
        });
        
        $(\'#modalWindow, #modalPolicy\').on(\'click\', function(event) {
            if (event.target == document.getElementById("modalWindow") || event.target == document.getElementById("modalPolicy")) {
                $(\'#modalWindow\').hide();
                $(\'#modalPolicy\').hide();
            }
        });
    });
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/jquery.mask.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/jquery.fancybox.min.js"></script>
<script src="./assets/js/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    function openNav() {
        document.getElementById("navSidebar").style.width = "80%";
    }
    function closeNav() {
        document.getElementById("navSidebar").style.width = "0";
    }

    var acc = document.getElementsByClassName("accordion");
    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
    
    $(document).ready(function(){
        $(\'.clients\').slick({
            slidesToShow: 3,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 0,
            cssEase: \'linear\',
            speed: 2000,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 577,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 325,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });

    $(document).ready(function() {
        $(document).scroll(function() {
            if ($(document).scrollTop() > 170) {
                $(\'.sticky-nav\').addClass(\'show\');
            } else {
                $(\'.sticky-nav\').removeClass(\'show\');
            }
        });
        $(\'.list-news .toggle\').on(\'click\', function() {
            $(this).toggleClass(\'active\').siblings(\'a\').toggleClass(\'show\');
        });
        
        $(\'.card\').on(\'mouseover\', function() {
            $(this).children(\'.card-overlay\').show();
        });

        $(\'.card\').on(\'mouseout\', function() {
            $(this).children(\'.card-overlay\').hide();
        });

        $(\'.carouselReviews\').owlCarousel({
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            items: 3,
            responsive: {
                0: {
                    items: 1,
                    margin: 20,
                    stagePadding: 20,
                },
                425: {
                    items: 1,
                    loop: true,
                    margin: 20,
                    stagePadding: 90,
                },
                600: {
                    items: 1,
                    loop: true,
                    margin: 30,
                    stagePadding: 130,
                },
                768: {
                    loop: true,
                    items: 1,
                    margin: 30,
                    stagePadding: 220,
                },
                800: {
                    loop: true,
                    items: 1,
                    margin: 30,
                    stagePadding: 220,
                },
                1024: {
                    loop: true,
                    items: 1,
                    margin: 50,
                    stagePadding: 320,
                },
                1280: {
                    nav: true,
                    dots: false,
                    autoplay: false,
                    margin: 30,
                    items: 3,
                }
            }
        });

        $(\'.carouselSpecialists\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });
        
        $(\'.carouselNews\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselOurWorks\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselEquipments\').owlCarousel({
            nav: false,
            dots: true,
            autoplay: false,
            items: 1,
        });

        $(\'.carouselChemical\').owlCarousel({
            autoplay: true,
            items: 1,
        });

        $(\'.carouselCertificates\').owlCarousel({
            items: 4,
            dots: false,
            nav: false,
            autoplay: false,
            margin: 10,
            loop: true,
            responsive : {
                0: {
                    items: 2,
                    dots: true,
                },
                768: {
                    items: 3,
                    nav: true,
                },
                1280: {
                    items: 4,
                    nav: true,
                }
            }
        });

        $(\'.carouselClients\').owlCarousel({
            items: 3,
            dots: false,
            nav: false,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplaySpeed: 4000,
            margin: 20,
            loop: true,
            responsive : {
                0: {
                    items: 2,
                },
                768: {
                    items: 3,
                }
            }
        });
    });
    
    $(document).ready(function(){
        $(\'input.phone\').mask(\'+0 (000) 000-00-00\');
        
        $(\'.openModal\').on(\'click\', function(e) {
            e.preventDefault();
            $(\'#modalWindow\').show();
        });
        
        $(\'.openModalPolicy\').on(\'click\', function(e) {
            e.preventDefault();
            $(\'#modalPolicy\').show();
        });
        
        $(\'span.close\').on(\'click\', function() {
            $(\'#modalWindow\').hide();
            $(\'#modalPolicy\').hide();
        });
        
        $(\'#modalWindow, #modalPolicy\').on(\'click\', function(event) {
            if (event.target == document.getElementById("modalWindow") || event.target == document.getElementById("modalPolicy")) {
                $(\'#modalWindow\').hide();
                $(\'#modalPolicy\').hide();
            }
        });
    });
</script>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'tel' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tel',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '$p1 = array(" ", "-", "(", ")");
$p2 = array("", "", "", "");
return str_replace($p1, $p2, $input);',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$p1 = array(" ", "-", "(", ")");
$p2 = array("", "", "", "");
return str_replace($p1, $p2, $input);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пункта меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка внутренних пунктов меню. Если пуст - будет использовать "tplOuter".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления одного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного пункта меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, какие разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoCrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoCrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {
    $from = 0;
}
if (empty($to)) {
    $to = $modx->resource->id;
}
if (empty($direction)) {
    $direction = \'ltr\';
}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {
    $outputSeparator = \'&nbsp;&larr;&nbsp;\';
}
if ($limit == \'\') {
    $limit = 10;
}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {
    $limit = $maxCrumbs;
}
if (!empty($containerTpl)) {
    $tplWrapper = $containerTpl;
}
if (!empty($currentCrumbTpl)) {
    $tplCurrent = $currentCrumbTpl;
}
if (!empty($linkCrumbTpl)) {
    $scriptProperties[\'tpl\'] = $linkCrumbTpl;
}
if (!empty($maxCrumbTpl)) {
    $tplMax = $maxCrumbTpl;
}
if (isset($showBreadCrumbsAtHome)) {
    $showAtHome = $showBreadCrumbsAtHome;
}
if (isset($showHomeCrumb)) {
    $showHome = $showHomeCrumb;
}
if (isset($showCurrentCrumb)) {
    $showCurrent = $showCurrentCrumb;
}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
    return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {
    $where[\'published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}
if (!empty($hideContainers) && empty($showContainer)) {
    $where[\'isfolder\'] = 0;
}

$resource = ($to == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject($class, $to);

if (!$resource) {
    $message = \'Could not build breadcrumbs to resource "\' . $to . \'"\';

    return \'\';
}

if (!empty($customParents)) {
    $customParents = is_array($customParents) ? $customParents : array_map(\'trim\', explode(\',\', $customParents));
    $parents = is_array($customParents) ? array_reverse($customParents) : array();
}
if (empty($parents)) {
    $parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
}
if (!empty($showHome)) {
    $parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
    if (!empty($parent)) {
        $ids[] = $parent;
    }
    if (!empty($from) && $parent == $from) {
        break;
    }
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
    $where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\', $resourceColumns));

// Add custom parameters
foreach (array(\'where\', \'select\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'select\' => json_encode($select),
    \'groupby\' => $class . \'.id\',
    \'sortby\' => "find_in_set(`$class`.`id`,\'" . implode(\',\', $ids) . "\')",
    \'sortdir\' => \'\',
    \'return\' => \'data\',
    \'totalVar\' => \'pdocrumbs.total\',
    \'disableConditions\' => true,
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
    if (strtolower($direction) == \'ltr\') {
        $rows = array_reverse($rows);
    }

    foreach ($rows as $row) {
        if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
            $row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
                ? $pdoFetch->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row)
                : $row[\'content\'];
        } else {
            $row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
        }

        $row = array_merge(
            $scriptProperties,
            $row,
            array(\'idx\' => $pdoFetch->idx++)
        );
        if (empty($row[\'menutitle\'])) {
            $row[\'menutitle\'] = $row[\'pagetitle\'];
        }

        if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
            continue;
        } elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
            $tpl = $tplCurrent;
        } elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
            $tpl = $tplHome;
        } else {
            $tpl = $pdoFetch->defineChunk($row);
        }
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
    $pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
    $output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output = implode($outputSeparator, $output);
    if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
        $output = ($direction == \'ltr\')
            ? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
            : $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
    }
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'pdotools_prop_from',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса, от которого строить хлебные крошки. Обычно это корень сайта, то есть "0".',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'pdotools_prop_to',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса для которого строятся хлебные крошки. По умолчанию это id текущей страницы.',
              'area_trans' => '',
            ),
            'customParents' => 
            array (
              'name' => 'customParents',
              'desc' => 'pdotools_prop_customParents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список id через запятую для кастомного построения хлебных крошек.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'pdotools_prop_exclude',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список id ресурсов, которые нужно исключить из выборки.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ параметров.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Отключает вывод контейнеров, то есть, ресурсов с isfolder = 1.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="breadcrumb-item"><a href="[[+link]]">[[+menutitle]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplCurrent' => 
            array (
              'name' => 'tplCurrent',
              'desc' => 'pdotools_prop_tplCurrent',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="breadcrumb-item active">[[+menutitle]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего документа в навигации.',
              'area_trans' => '',
            ),
            'tplMax' => 
            array (
              'name' => 'tplMax',
              'desc' => 'pdotools_prop_tplMax',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="breadcrumb-item disabled">&nbsp;...&nbsp;</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который добавляется в начало результатов, если их больше чем "&limit".',
              'area_trans' => '',
            ),
            'tplHome' => 
            array (
              'name' => 'tplHome',
              'desc' => 'pdotools_prop_tplHome',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на главную страницу.',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ol class="breadcrumb">[[+output]]</ol>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
            'showCurrent' => 
            array (
              'name' => 'showCurrent',
              'desc' => 'pdotools_prop_showCurrent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить текущий документ в навигации.',
              'area_trans' => '',
            ),
            'showHome' => 
            array (
              'name' => 'showHome',
              'desc' => 'pdotools_prop_showHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить ссылку на главную в начале навигации.',
              'area_trans' => '',
            ),
            'showAtHome' => 
            array (
              'name' => 'showAtHome',
              'desc' => 'pdotools_prop_showAtHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать хлебные крошки на главной странице сайта.',
              'area_trans' => '',
            ),
            'hideSingle' => 
            array (
              'name' => 'hideSingle',
              'desc' => 'pdotools_prop_hideSingle',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Не выводить результат, если он один единственный.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'pdotools_prop_direction',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => 'Right To Left (rtl)',
                  'name' => 'Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление навигации: слева направо (ltr) или справа налево (rtl), например для Арабского языка.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdocrumbs.php',
          'content' => '/** @var array $scriptProperties */
/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {
    $from = 0;
}
if (empty($to)) {
    $to = $modx->resource->id;
}
if (empty($direction)) {
    $direction = \'ltr\';
}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {
    $outputSeparator = \'&nbsp;&larr;&nbsp;\';
}
if ($limit == \'\') {
    $limit = 10;
}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {
    $limit = $maxCrumbs;
}
if (!empty($containerTpl)) {
    $tplWrapper = $containerTpl;
}
if (!empty($currentCrumbTpl)) {
    $tplCurrent = $currentCrumbTpl;
}
if (!empty($linkCrumbTpl)) {
    $scriptProperties[\'tpl\'] = $linkCrumbTpl;
}
if (!empty($maxCrumbTpl)) {
    $tplMax = $maxCrumbTpl;
}
if (isset($showBreadCrumbsAtHome)) {
    $showAtHome = $showBreadCrumbsAtHome;
}
if (isset($showHomeCrumb)) {
    $showHome = $showHomeCrumb;
}
if (isset($showCurrentCrumb)) {
    $showCurrent = $showCurrentCrumb;
}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
    return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {
    $where[\'published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}
if (!empty($hideContainers) && empty($showContainer)) {
    $where[\'isfolder\'] = 0;
}

$resource = ($to == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject($class, $to);

if (!$resource) {
    $message = \'Could not build breadcrumbs to resource "\' . $to . \'"\';

    return \'\';
}

if (!empty($customParents)) {
    $customParents = is_array($customParents) ? $customParents : array_map(\'trim\', explode(\',\', $customParents));
    $parents = is_array($customParents) ? array_reverse($customParents) : array();
}
if (empty($parents)) {
    $parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
}
if (!empty($showHome)) {
    $parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
    if (!empty($parent)) {
        $ids[] = $parent;
    }
    if (!empty($from) && $parent == $from) {
        break;
    }
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
    $where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\', $resourceColumns));

// Add custom parameters
foreach (array(\'where\', \'select\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'select\' => json_encode($select),
    \'groupby\' => $class . \'.id\',
    \'sortby\' => "find_in_set(`$class`.`id`,\'" . implode(\',\', $ids) . "\')",
    \'sortdir\' => \'\',
    \'return\' => \'data\',
    \'totalVar\' => \'pdocrumbs.total\',
    \'disableConditions\' => true,
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
    if (strtolower($direction) == \'ltr\') {
        $rows = array_reverse($rows);
    }

    foreach ($rows as $row) {
        if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
            $row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
                ? $pdoFetch->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row)
                : $row[\'content\'];
        } else {
            $row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
        }

        $row = array_merge(
            $scriptProperties,
            $row,
            array(\'idx\' => $pdoFetch->idx++)
        );
        if (empty($row[\'menutitle\'])) {
            $row[\'menutitle\'] = $row[\'pagetitle\'];
        }

        if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
            continue;
        } elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
            $tpl = $tplCurrent;
        } elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
            $tpl = $tplHome;
        } else {
            $tpl = $pdoFetch->defineChunk($row);
        }
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
    $pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
    $output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output = implode($outputSeparator, $output);
    if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
        $output = ($direction == \'ltr\')
            ? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
            : $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
    }
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoPage' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoPage',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
// Default variables
if (empty($pageVarKey)) {
    $pageVarKey = \'page\';
}
if (empty($pageNavVar)) {
    $pageNavVar = \'page.nav\';
}
if (empty($pageCountVar)) {
    $pageCountVar = \'pageCount\';
}
if (empty($totalVar)) {
    $totalVar = \'total\';
}
if (empty($page)) {
    $page = 1;
}
if (empty($pageLimit)) {
    $pageLimit = 5;
} else {
    $pageLimit = (integer)$pageLimit;
}
if (!isset($plPrefix)) {
    $plPrefix = \'\';
}
if (!empty($scriptProperties[\'ajaxMode\'])) {
    $scriptProperties[\'ajax\'] = 1;
}

// Convert parameters from getPage if exists
if (!empty($namespace)) {
    $plPrefix = $namespace;
}
if (!empty($pageNavTpl)) {
    $scriptProperties[\'tplPage\'] = $pageNavTpl;
}
if (!empty($pageNavOuterTpl)) {
    $scriptProperties[\'tplPageWrapper\'] = $pageNavOuterTpl;
}
if (!empty($pageActiveTpl)) {
    $scriptProperties[\'tplPageActive\'] = $pageActiveTpl;
}
if (!empty($pageFirstTpl)) {
    $scriptProperties[\'tplPageFirst\'] = $pageFirstTpl;
}
if (!empty($pagePrevTpl)) {
    $scriptProperties[\'tplPagePrev\'] = $pagePrevTpl;
}
if (!empty($pageNextTpl)) {
    $scriptProperties[\'tplPageNext\'] = $pageNextTpl;
}
if (!empty($pageLastTpl)) {
    $scriptProperties[\'tplPageLast\'] = $pageLastTpl;
}
if (!empty($pageSkipTpl)) {
    $scriptProperties[\'tplPageSkip\'] = $pageSkipTpl;
}
if (!empty($pageNavScheme)) {
    $scriptProperties[\'scheme\'] = $pageNavScheme;
}
if (!empty($cache_expires)) {
    $scriptProperties[\'cacheTime\'] = $cache_expires;
}
//---
$strictMode = !empty($strictMode);

$isAjax = !empty($scriptProperties[\'ajax\']) && !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
if ($isAjax && !isset($_REQUEST[$pageVarKey])) {
    return;
}

/** @var pdoPage $pdoPage */
$fqn = $modx->getOption(\'pdoPage.class\', null, \'pdotools.pdopage\', true);
$path = $modx->getOption(\'pdopage_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoPage = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoPage->pdoTools->addTime(\'pdoTools loaded\');

// Script and styles
if (!$isAjax && !empty($scriptProperties[\'ajaxMode\'])) {
    $pdoPage->loadJsCss();
}
// Removing of default scripts and styles so they do not overwrote nested snippet parameters
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoPage\'))) {
    $properties = $snippet->get(\'properties\');
    if ($scriptProperties[\'frontend_js\'] == $properties[\'frontend_js\'][\'value\']) {
        unset($scriptProperties[\'frontend_js\']);
    }
    if ($scriptProperties[\'frontend_css\'] == $properties[\'frontend_css\'][\'value\']) {
        unset($scriptProperties[\'frontend_css\']);
    }
}

// Page
if (isset($_REQUEST[$pageVarKey]) && $strictMode && (!is_numeric($_REQUEST[$pageVarKey]) || ($_REQUEST[$pageVarKey] <= 1 && !$isAjax))) {
    return $pdoPage->redirectToFirst($isAjax);
} elseif (!empty($_REQUEST[$pageVarKey])) {
    $page = (integer)$_REQUEST[$pageVarKey];
}
$scriptProperties[\'page\'] = $page;
$scriptProperties[\'request\'] = $_REQUEST;
$scriptProperties[\'setTotal\'] = true;

// Limit
if (isset($_REQUEST[\'limit\'])) {
    if (is_numeric($_REQUEST[\'limit\']) && abs($_REQUEST[\'limit\']) > 0) {
        $scriptProperties[\'limit\'] = abs($_REQUEST[\'limit\']);
    } elseif ($strictMode) {
        unset($_GET[\'limit\']);

        return $pdoPage->redirectToFirst($isAjax);
    }
}
if (!empty($maxLimit) && !empty($scriptProperties[\'limit\']) && $scriptProperties[\'limit\'] > $maxLimit) {
    $scriptProperties[\'limit\'] = $maxLimit;
}

// Offset
$offset = !empty($scriptProperties[\'offset\']) && $scriptProperties[\'offset\'] > 0
    ? (int)$scriptProperties[\'offset\']
    : 0;
$scriptProperties[\'offset\'] = $page > 1
    ? $scriptProperties[\'limit\'] * ($page - 1) + $offset
    : $offset;
if (!empty($scriptProperties[\'offset\']) && empty($scriptProperties[\'limit\'])) {
    $scriptProperties[\'limit\'] = 10000000;
}

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
$url = $pdoPage->getBaseUrl();
$output = $pagination = $total = $pageCount = \'\';

$data = $cache
    ? $pdoPage->pdoTools->getCache($scriptProperties)
    : array();

if (empty($data)) {
    $output = $pdoPage->pdoTools->runSnippet($scriptProperties[\'element\'], $scriptProperties);
    if ($output === false) {
        return \'\';
    } elseif (!empty($toPlaceholder)) {
        $output = $modx->getPlaceholder($toPlaceholder);
    }

    // Pagination
    $total = (int)$modx->getPlaceholder($totalVar);
    $pageCount = !empty($scriptProperties[\'limit\']) && $total > $offset
        ? ceil(($total - $offset) / $scriptProperties[\'limit\'])
        : 0;

    // Redirect to start if somebody specified incorrect page
    if ($page > 1 && $page > $pageCount && $strictMode) {
        return $pdoPage->redirectToFirst($isAjax);
    }
    if (!empty($pageCount) && $pageCount > 1) {
        $pagination = array(
            \'first\' => $page > 1 && !empty($tplPageFirst)
                ? $pdoPage->makePageLink($url, 1, $tplPageFirst)
                : \'\',
            \'prev\' => $page > 1 && !empty($tplPagePrev)
                ? $pdoPage->makePageLink($url, $page - 1, $tplPagePrev)
                : \'\',
            \'pages\' => $pageLimit >= 7 && empty($disableModernPagination)
                ? $pdoPage->buildModernPagination($page, $pageCount, $url)
                : $pdoPage->buildClassicPagination($page, $pageCount, $url),
            \'next\' => $page < $pageCount && !empty($tplPageNext)
                ? $pdoPage->makePageLink($url, $page + 1, $tplPageNext)
                : \'\',
            \'last\' => $page < $pageCount && !empty($tplPageLast)
                ? $pdoPage->makePageLink($url, $pageCount, $tplPageLast)
                : \'\',
        );

        if (!empty($pageCount)) {
            foreach (array(\'first\', \'prev\', \'next\', \'last\') as $v) {
                $tpl = \'tplPage\' . ucfirst($v) . \'Empty\';
                if (!empty(${$tpl}) && empty($pagination[$v])) {
                    $pagination[$v] = $pdoPage->pdoTools->getChunk(${$tpl});
                }
            }
        }
    } else {
        $pagination = array(
            \'first\' => \'\',
            \'prev\' => \'\',
            \'pages\' => \'\',
            \'next\' => \'\',
            \'last\' => \'\'
        );
    }

    $data = array(
        \'output\' => $output,
        $pageVarKey => $page,
        $pageCountVar => $pageCount,
        $pageNavVar => !empty($tplPageWrapper)
            ? $pdoPage->pdoTools->getChunk($tplPageWrapper, $pagination)
            : $pdoPage->pdoTools->parseChunk(\'\', $pagination),
        $totalVar => $total,
    );
    if ($cache) {
        $pdoPage->pdoTools->setCache($data, $scriptProperties);
    }
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $data[\'output\'] .= \'<pre class="pdoPageLog">\' . print_r($pdoPage->pdoTools->getTime(), 1) . \'</pre>\';
}

if ($isAjax) {
    if ($pageNavVar != \'pagination\') {
        $data[\'pagination\'] = $data[$pageNavVar];
        unset($data[$pageNavVar]);
    }
    if ($pageCountVar != \'pages\') {
        $data[\'pages\'] = (int)$data[$pageCountVar];
        unset($data[$pageCountVar]);
    }
    if ($pageVarKey != \'page\') {
        $data[\'page\'] = (int)$data[$pageVarKey];
        unset($data[$pageVarKey]);
    }
    if ($totalVar != \'total\') {
        $data[\'total\'] = (int)$data[$totalVar];
        unset($data[$totalVar]);
    }

    $maxIterations = (integer)$modx->getOption(\'parser_max_iterations\', null, 10);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], false, false, \'[[\', \']]\', array(), $maxIterations);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], true, true, \'[[\', \']]\', array(), $maxIterations);

    @session_write_close();
    exit(json_encode($data));
} else {
    if (!empty($setMeta)) {
        $charset = $modx->getOption(\'modx_charset\', null, \'UTF-8\');
        $canurl = $pdoPage->pdoTools->config[\'scheme\'] !== \'full\'
            ? rtrim($modx->getOption(\'site_url\'), \'/\') . \'/\' . ltrim($url, \'/\')
            : $url;
        $modx->regClientStartupHTMLBlock(\'<link rel="canonical" href="\' . htmlentities($canurl, ENT_QUOTES, $charset) . \'"/>\');
        if ($data[$pageVarKey] > 1) {
            $prevUrl = $pdoPage->makePageLink($canurl, $data[$pageVarKey] - 1);
            $modx->regClientStartupHTMLBlock(
                \'<link rel="prev" href="\' . htmlentities($prevUrl, ENT_QUOTES, $charset) . \'"/>\'
            );
        }
        if ($data[$pageVarKey] < $data[$pageCountVar]) {
            $nextUrl = $pdoPage->makePageLink($canurl, $data[$pageVarKey] + 1);
            $modx->regClientStartupHTMLBlock(
                \'<link rel="next" href="\' . htmlentities($nextUrl, ENT_QUOTES, $charset) . \'"/>\'
            );
        }
    }

    $modx->setPlaceholders($data, $plPrefix);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $data[\'output\']);
    } else {
        return $data[\'output\'];
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'maxLimit' => 
            array (
              'name' => 'maxLimit',
              'desc' => 'pdotools_prop_maxLimit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 100,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Максимально возможный лимит выборки. Перекрывает лимит, указанный пользователем через url.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'page' => 
            array (
              'name' => 'page',
              'desc' => 'pdotools_prop_page',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер страницы для вывода. Перекрывается номером, указанным пользователем через url.',
              'area_trans' => '',
            ),
            'pageVarKey' => 
            array (
              'name' => 'pageVarKey',
              'desc' => 'pdotools_prop_pageVarKey',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'page',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя переменной для поиска номера страницы в url.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'pdotools_prop_totalVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'page.total',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для сохранения общего количества результатов.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'pdotools_prop_pageLimit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 5,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Количество ссылок на страницы. Если больше или равно 7 - включается продвинутый режим отображения.',
              'area_trans' => '',
            ),
            'element' => 
            array (
              'name' => 'element',
              'desc' => 'pdotools_prop_element',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'pdoResources',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя сниппета для запуска.',
              'area_trans' => '',
            ),
            'pageNavVar' => 
            array (
              'name' => 'pageNavVar',
              'desc' => 'pdotools_prop_pageNavVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'page.nav',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для вывода пагинации.',
              'area_trans' => '',
            ),
            'pageCountVar' => 
            array (
              'name' => 'pageCountVar',
              'desc' => 'pdotools_prop_pageCountVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'pageCount',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для вывода количества страниц.',
              'area_trans' => '',
            ),
            'pageLinkScheme' => 
            array (
              'name' => 'pageLinkScheme',
              'desc' => 'pdotools_prop_pageLinkScheme',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема генерации ссылки на страницу. Можно использовать плейсхолдеры [[+pageVarKey]] и [[+page]]',
              'area_trans' => '',
            ),
            'tplPage' => 
            array (
              'name' => 'tplPage',
              'desc' => 'pdotools_prop_tplPage',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления обычной ссылки на страницу.',
              'area_trans' => '',
            ),
            'tplPageWrapper' => 
            array (
              'name' => 'tplPageWrapper',
              'desc' => 'pdotools_prop_tplPageWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul class="pagination">[[+first]][[+prev]][[+pages]][[+next]][[+last]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления всего блока пагинации, содержит плейсхолдеры страниц.',
              'area_trans' => '',
            ),
            'tplPageActive' => 
            array (
              'name' => 'tplPageActive',
              'desc' => 'pdotools_prop_tplPageActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item active"><a class="page-link" href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на текущую страницу.',
              'area_trans' => '',
            ),
            'tplPageFirst' => 
            array (
              'name' => 'tplPageFirst',
              'desc' => 'pdotools_prop_tplPageFirst',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[%pdopage_first]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на первую страницу.',
              'area_trans' => '',
            ),
            'tplPageLast' => 
            array (
              'name' => 'tplPageLast',
              'desc' => 'pdotools_prop_tplPageLast',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[%pdopage_last]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на последнюю страницу.',
              'area_trans' => '',
            ),
            'tplPagePrev' => 
            array (
              'name' => 'tplPagePrev',
              'desc' => 'pdotools_prop_tplPagePrev',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">&laquo;</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на предыдущую страницу.',
              'area_trans' => '',
            ),
            'tplPageNext' => 
            array (
              'name' => 'tplPageNext',
              'desc' => 'pdotools_prop_tplPageNext',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">&raquo;</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на следующую страницу.',
              'area_trans' => '',
            ),
            'tplPageSkip' => 
            array (
              'name' => 'tplPageSkip',
              'desc' => 'pdotools_prop_tplPageSkip',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item disabled"><a class="page-link" href="#">...</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления пропущенных страниц при продвинутом режиме отображения (&pageLimit >= 7).',
              'area_trans' => '',
            ),
            'tplPageFirstEmpty' => 
            array (
              'name' => 'tplPageFirstEmpty',
              'desc' => 'pdotools_prop_tplPageFirstEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item disabled"><a class="page-link" href="#">[[%pdopage_first]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на первую страницу.',
              'area_trans' => '',
            ),
            'tplPageLastEmpty' => 
            array (
              'name' => 'tplPageLastEmpty',
              'desc' => 'pdotools_prop_tplPageLastEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item disabled"><a class="page-link" href="#">[[%pdopage_last]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на последнюю страницу.',
              'area_trans' => '',
            ),
            'tplPagePrevEmpty' => 
            array (
              'name' => 'tplPagePrevEmpty',
              'desc' => 'pdotools_prop_tplPagePrevEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на предыдущую страницу.',
              'area_trans' => '',
            ),
            'tplPageNextEmpty' => 
            array (
              'name' => 'tplPageNextEmpty',
              'desc' => 'pdotools_prop_tplPageNextEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на следующую страницу.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'ajax' => 
            array (
              'name' => 'ajax',
              'desc' => 'pdotools_prop_ajax',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить поддержку ajax запросов.',
              'area_trans' => '',
            ),
            'ajaxMode' => 
            array (
              'name' => 'ajaxMode',
              'desc' => 'pdotools_prop_ajaxMode',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'None',
                  'value' => '',
                  'name' => 'None',
                ),
                1 => 
                array (
                  'text' => 'Default',
                  'value' => 'default',
                  'name' => 'Default',
                ),
                2 => 
                array (
                  'text' => 'Scroll',
                  'value' => 'scroll',
                  'name' => 'Scroll',
                ),
                3 => 
                array (
                  'text' => 'Button',
                  'value' => 'button',
                  'name' => 'Button',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ajax пагинация "из коробки". Доступны 3 режима: "default", "button" и "scroll".',
              'area_trans' => '',
            ),
            'ajaxElemWrapper' => 
            array (
              'name' => 'ajaxElemWrapper',
              'desc' => 'pdotools_prop_ajaxElemWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор элемента-обёртки с результатами и пагинацией.',
              'area_trans' => '',
            ),
            'ajaxElemRows' => 
            array (
              'name' => 'ajaxElemRows',
              'desc' => 'pdotools_prop_ajaxElemRows',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .rows',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор элемента с результатами.',
              'area_trans' => '',
            ),
            'ajaxElemPagination' => 
            array (
              'name' => 'ajaxElemPagination',
              'desc' => 'pdotools_prop_ajaxElemPagination',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .pagination',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор элемента с пагинацией.',
              'area_trans' => '',
            ),
            'ajaxElemLink' => 
            array (
              'name' => 'ajaxElemLink',
              'desc' => 'pdotools_prop_ajaxElemLink',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .pagination a',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор ссылки на страницу.',
              'area_trans' => '',
            ),
            'ajaxElemMore' => 
            array (
              'name' => 'ajaxElemMore',
              'desc' => 'pdotools_prop_ajaxElemMore',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .btn-more',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор кнопки загрузки результатов при ajaxMode = button.',
              'area_trans' => '',
            ),
            'ajaxTplMore' => 
            array (
              'name' => 'ajaxTplMore',
              'desc' => 'pdotools_prop_ajaxTplMore',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <button class="btn btn-primary btn-more">[[%pdopage_more]]</button>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Шаблон кнопки для загрузки новых результатов при ajaxMode = button. Должен включать селектор, указанный в "ajaxElemMore".',
              'area_trans' => '',
            ),
            'ajaxHistory' => 
            array (
              'name' => 'ajaxHistory',
              'desc' => 'pdotools_prop_ajaxHistory',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'Auto',
                  'value' => '',
                  'name' => 'Auto',
                ),
                1 => 
                array (
                  'text' => 'Enabled',
                  'value' => 1,
                  'name' => 'Enabled',
                ),
                2 => 
                array (
                  'text' => 'Disabled',
                  'value' => 0,
                  'name' => 'Disabled',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Сохранять номер страницы в url при работе в режиме ajax.',
              'area_trans' => '',
            ),
            'frontend_js' => 
            array (
              'name' => 'frontend_js',
              'desc' => 'pdotools_prop_frontend_js',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]js/pdopage.min.js',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ссылка на javascript для подключения сниппетом.',
              'area_trans' => '',
            ),
            'frontend_css' => 
            array (
              'name' => 'frontend_css',
              'desc' => 'pdotools_prop_frontend_css',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]css/pdopage.min.css',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ссылка на css стили оформления для подключения сниппетом.',
              'area_trans' => '',
            ),
            'setMeta' => 
            array (
              'name' => 'setMeta',
              'desc' => 'pdotools_prop_setMeta',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Регистрация мета-тегов со ссылками на предыдущую и следующую страницу.',
              'area_trans' => '',
            ),
            'strictMode' => 
            array (
              'name' => 'strictMode',
              'desc' => 'pdotools_prop_strictMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Строгий режим работы. pdoPage делает редиректы при загрузке несуществующих страниц.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdopage.php',
          'content' => '/** @var array $scriptProperties */
// Default variables
if (empty($pageVarKey)) {
    $pageVarKey = \'page\';
}
if (empty($pageNavVar)) {
    $pageNavVar = \'page.nav\';
}
if (empty($pageCountVar)) {
    $pageCountVar = \'pageCount\';
}
if (empty($totalVar)) {
    $totalVar = \'total\';
}
if (empty($page)) {
    $page = 1;
}
if (empty($pageLimit)) {
    $pageLimit = 5;
} else {
    $pageLimit = (integer)$pageLimit;
}
if (!isset($plPrefix)) {
    $plPrefix = \'\';
}
if (!empty($scriptProperties[\'ajaxMode\'])) {
    $scriptProperties[\'ajax\'] = 1;
}

// Convert parameters from getPage if exists
if (!empty($namespace)) {
    $plPrefix = $namespace;
}
if (!empty($pageNavTpl)) {
    $scriptProperties[\'tplPage\'] = $pageNavTpl;
}
if (!empty($pageNavOuterTpl)) {
    $scriptProperties[\'tplPageWrapper\'] = $pageNavOuterTpl;
}
if (!empty($pageActiveTpl)) {
    $scriptProperties[\'tplPageActive\'] = $pageActiveTpl;
}
if (!empty($pageFirstTpl)) {
    $scriptProperties[\'tplPageFirst\'] = $pageFirstTpl;
}
if (!empty($pagePrevTpl)) {
    $scriptProperties[\'tplPagePrev\'] = $pagePrevTpl;
}
if (!empty($pageNextTpl)) {
    $scriptProperties[\'tplPageNext\'] = $pageNextTpl;
}
if (!empty($pageLastTpl)) {
    $scriptProperties[\'tplPageLast\'] = $pageLastTpl;
}
if (!empty($pageSkipTpl)) {
    $scriptProperties[\'tplPageSkip\'] = $pageSkipTpl;
}
if (!empty($pageNavScheme)) {
    $scriptProperties[\'scheme\'] = $pageNavScheme;
}
if (!empty($cache_expires)) {
    $scriptProperties[\'cacheTime\'] = $cache_expires;
}
//---
$strictMode = !empty($strictMode);

$isAjax = !empty($scriptProperties[\'ajax\']) && !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
if ($isAjax && !isset($_REQUEST[$pageVarKey])) {
    return;
}

/** @var pdoPage $pdoPage */
$fqn = $modx->getOption(\'pdoPage.class\', null, \'pdotools.pdopage\', true);
$path = $modx->getOption(\'pdopage_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoPage = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoPage->pdoTools->addTime(\'pdoTools loaded\');

// Script and styles
if (!$isAjax && !empty($scriptProperties[\'ajaxMode\'])) {
    $pdoPage->loadJsCss();
}
// Removing of default scripts and styles so they do not overwrote nested snippet parameters
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoPage\'))) {
    $properties = $snippet->get(\'properties\');
    if ($scriptProperties[\'frontend_js\'] == $properties[\'frontend_js\'][\'value\']) {
        unset($scriptProperties[\'frontend_js\']);
    }
    if ($scriptProperties[\'frontend_css\'] == $properties[\'frontend_css\'][\'value\']) {
        unset($scriptProperties[\'frontend_css\']);
    }
}

// Page
if (isset($_REQUEST[$pageVarKey]) && $strictMode && (!is_numeric($_REQUEST[$pageVarKey]) || ($_REQUEST[$pageVarKey] <= 1 && !$isAjax))) {
    return $pdoPage->redirectToFirst($isAjax);
} elseif (!empty($_REQUEST[$pageVarKey])) {
    $page = (integer)$_REQUEST[$pageVarKey];
}
$scriptProperties[\'page\'] = $page;
$scriptProperties[\'request\'] = $_REQUEST;
$scriptProperties[\'setTotal\'] = true;

// Limit
if (isset($_REQUEST[\'limit\'])) {
    if (is_numeric($_REQUEST[\'limit\']) && abs($_REQUEST[\'limit\']) > 0) {
        $scriptProperties[\'limit\'] = abs($_REQUEST[\'limit\']);
    } elseif ($strictMode) {
        unset($_GET[\'limit\']);

        return $pdoPage->redirectToFirst($isAjax);
    }
}
if (!empty($maxLimit) && !empty($scriptProperties[\'limit\']) && $scriptProperties[\'limit\'] > $maxLimit) {
    $scriptProperties[\'limit\'] = $maxLimit;
}

// Offset
$offset = !empty($scriptProperties[\'offset\']) && $scriptProperties[\'offset\'] > 0
    ? (int)$scriptProperties[\'offset\']
    : 0;
$scriptProperties[\'offset\'] = $page > 1
    ? $scriptProperties[\'limit\'] * ($page - 1) + $offset
    : $offset;
if (!empty($scriptProperties[\'offset\']) && empty($scriptProperties[\'limit\'])) {
    $scriptProperties[\'limit\'] = 10000000;
}

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
$url = $pdoPage->getBaseUrl();
$output = $pagination = $total = $pageCount = \'\';

$data = $cache
    ? $pdoPage->pdoTools->getCache($scriptProperties)
    : array();

if (empty($data)) {
    $output = $pdoPage->pdoTools->runSnippet($scriptProperties[\'element\'], $scriptProperties);
    if ($output === false) {
        return \'\';
    } elseif (!empty($toPlaceholder)) {
        $output = $modx->getPlaceholder($toPlaceholder);
    }

    // Pagination
    $total = (int)$modx->getPlaceholder($totalVar);
    $pageCount = !empty($scriptProperties[\'limit\']) && $total > $offset
        ? ceil(($total - $offset) / $scriptProperties[\'limit\'])
        : 0;

    // Redirect to start if somebody specified incorrect page
    if ($page > 1 && $page > $pageCount && $strictMode) {
        return $pdoPage->redirectToFirst($isAjax);
    }
    if (!empty($pageCount) && $pageCount > 1) {
        $pagination = array(
            \'first\' => $page > 1 && !empty($tplPageFirst)
                ? $pdoPage->makePageLink($url, 1, $tplPageFirst)
                : \'\',
            \'prev\' => $page > 1 && !empty($tplPagePrev)
                ? $pdoPage->makePageLink($url, $page - 1, $tplPagePrev)
                : \'\',
            \'pages\' => $pageLimit >= 7 && empty($disableModernPagination)
                ? $pdoPage->buildModernPagination($page, $pageCount, $url)
                : $pdoPage->buildClassicPagination($page, $pageCount, $url),
            \'next\' => $page < $pageCount && !empty($tplPageNext)
                ? $pdoPage->makePageLink($url, $page + 1, $tplPageNext)
                : \'\',
            \'last\' => $page < $pageCount && !empty($tplPageLast)
                ? $pdoPage->makePageLink($url, $pageCount, $tplPageLast)
                : \'\',
        );

        if (!empty($pageCount)) {
            foreach (array(\'first\', \'prev\', \'next\', \'last\') as $v) {
                $tpl = \'tplPage\' . ucfirst($v) . \'Empty\';
                if (!empty(${$tpl}) && empty($pagination[$v])) {
                    $pagination[$v] = $pdoPage->pdoTools->getChunk(${$tpl});
                }
            }
        }
    } else {
        $pagination = array(
            \'first\' => \'\',
            \'prev\' => \'\',
            \'pages\' => \'\',
            \'next\' => \'\',
            \'last\' => \'\'
        );
    }

    $data = array(
        \'output\' => $output,
        $pageVarKey => $page,
        $pageCountVar => $pageCount,
        $pageNavVar => !empty($tplPageWrapper)
            ? $pdoPage->pdoTools->getChunk($tplPageWrapper, $pagination)
            : $pdoPage->pdoTools->parseChunk(\'\', $pagination),
        $totalVar => $total,
    );
    if ($cache) {
        $pdoPage->pdoTools->setCache($data, $scriptProperties);
    }
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $data[\'output\'] .= \'<pre class="pdoPageLog">\' . print_r($pdoPage->pdoTools->getTime(), 1) . \'</pre>\';
}

if ($isAjax) {
    if ($pageNavVar != \'pagination\') {
        $data[\'pagination\'] = $data[$pageNavVar];
        unset($data[$pageNavVar]);
    }
    if ($pageCountVar != \'pages\') {
        $data[\'pages\'] = (int)$data[$pageCountVar];
        unset($data[$pageCountVar]);
    }
    if ($pageVarKey != \'page\') {
        $data[\'page\'] = (int)$data[$pageVarKey];
        unset($data[$pageVarKey]);
    }
    if ($totalVar != \'total\') {
        $data[\'total\'] = (int)$data[$totalVar];
        unset($data[$totalVar]);
    }

    $maxIterations = (integer)$modx->getOption(\'parser_max_iterations\', null, 10);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], false, false, \'[[\', \']]\', array(), $maxIterations);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], true, true, \'[[\', \']]\', array(), $maxIterations);

    @session_write_close();
    exit(json_encode($data));
} else {
    if (!empty($setMeta)) {
        $charset = $modx->getOption(\'modx_charset\', null, \'UTF-8\');
        $canurl = $pdoPage->pdoTools->config[\'scheme\'] !== \'full\'
            ? rtrim($modx->getOption(\'site_url\'), \'/\') . \'/\' . ltrim($url, \'/\')
            : $url;
        $modx->regClientStartupHTMLBlock(\'<link rel="canonical" href="\' . htmlentities($canurl, ENT_QUOTES, $charset) . \'"/>\');
        if ($data[$pageVarKey] > 1) {
            $prevUrl = $pdoPage->makePageLink($canurl, $data[$pageVarKey] - 1);
            $modx->regClientStartupHTMLBlock(
                \'<link rel="prev" href="\' . htmlentities($prevUrl, ENT_QUOTES, $charset) . \'"/>\'
            );
        }
        if ($data[$pageVarKey] < $data[$pageCountVar]) {
            $nextUrl = $pdoPage->makePageLink($canurl, $data[$pageVarKey] + 1);
            $modx->regClientStartupHTMLBlock(
                \'<link rel="next" href="\' . htmlentities($nextUrl, ENT_QUOTES, $charset) . \'"/>\'
            );
        }
    }

    $modx->setPlaceholders($data, $plPrefix);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $data[\'output\']);
    } else {
        return $data[\'output\'];
    }
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'SimpleSearchForm' => 
      array (
        'fields' => 
        array (
          'id' => 41,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SimpleSearchForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 23,
          'cache_type' => 0,
          'snippet' => '/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(
    \'simplesearch.core_path\',
    null,
    $modx->getOption(\'core_path\') . \'components/simplesearch/\'
) . \'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx, $scriptProperties);

/* Setup default options. */
$scriptProperties = array_merge(
    array(
        \'tpl\'           => \'SearchForm\',
        \'method\'        => \'get\',
        \'searchIndex\'   => \'search\',
        \'toPlaceholder\' => false,
        \'landing\'       => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* If get value already exists, set it as default. */
$searchValue  = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);

array_map(array($modx, \'sanitizeString\'), $searchValues);

$searchValue  = implode(\' \', $searchValues);
$placeholders = array(
    \'method\'      => $scriptProperties[\'method\'],
    \'landing\'     => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(htmlspecialchars($searchValue, ENT_QUOTES, \'UTF-8\')),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'], $placeholders);

return $search->output($output, $scriptProperties[\'toPlaceholder\']);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'simplesearch.tpl_form_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchForm',
              'lexicon' => 'simplesearch:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который будет использоваться как шаблон для отображения формы поиска.',
              'area_trans' => '',
            ),
            'landing' => 
            array (
              'name' => 'landing',
              'desc' => 'simplesearch.landing_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'simplesearch:properties',
              'area' => '',
              'desc_trans' => 'Ресурс на котором будет вызов сниппета SimpleSearch отображающий результаты поиска.',
              'area_trans' => '',
            ),
            'searchIndex' => 
            array (
              'name' => 'searchIndex',
              'desc' => 'simplesearch.searchindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'search',
              'lexicon' => 'simplesearch:properties',
              'area' => '',
              'desc_trans' => 'Имя параметра который будет использоваться для передачи поискового запроса.',
              'area_trans' => '',
            ),
            'method' => 
            array (
              'name' => 'method',
              'desc' => 'simplesearch.method_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'simplesearch.get',
                  'value' => 'get',
                  'name' => 'get',
                ),
                1 => 
                array (
                  'text' => 'simplesearch.post',
                  'value' => 'post',
                  'name' => 'post',
                ),
              ),
              'value' => 'get',
              'lexicon' => 'simplesearch:properties',
              'area' => '',
              'desc_trans' => 'Какой метод будет использован в форме поиска, POST или GET.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'simplesearch.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'simplesearch:properties',
              'area' => '',
              'desc_trans' => 'Выводить результат работы сниппета непосредственно, или использовать для вывода подстановщик с этим именем.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(
    \'simplesearch.core_path\',
    null,
    $modx->getOption(\'core_path\') . \'components/simplesearch/\'
) . \'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx, $scriptProperties);

/* Setup default options. */
$scriptProperties = array_merge(
    array(
        \'tpl\'           => \'SearchForm\',
        \'method\'        => \'get\',
        \'searchIndex\'   => \'search\',
        \'toPlaceholder\' => false,
        \'landing\'       => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* If get value already exists, set it as default. */
$searchValue  = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);

array_map(array($modx, \'sanitizeString\'), $searchValues);

$searchValue  = implode(\' \', $searchValues);
$placeholders = array(
    \'method\'      => $scriptProperties[\'method\'],
    \'landing\'     => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(htmlspecialchars($searchValue, ENT_QUOTES, \'UTF-8\')),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'], $placeholders);

return $search->output($output, $scriptProperties[\'toPlaceholder\']);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'corona_btn_url' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'number',
          'name' => 'corona_btn_url',
          'caption' => 'Ссылка на страницу (ID страницы)',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'locked' => false,
          'elements' => '',
          'rank' => 20,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'allowDecimals' => 'false',
            'allowNegative' => 'false',
            'decimalPrecision' => '2',
            'decimalSeparator' => '.',
            'maxValue' => '',
            'minValue' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'corona_btn_title' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'corona_btn_title',
          'caption' => 'Надпись на кнопке',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'locked' => false,
          'elements' => '',
          'rank' => 10,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'show_corona_btn' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'checkbox',
          'name' => 'show_corona_btn',
          'caption' => 'Кнопка "КОРОНАВИРУС"',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'locked' => false,
          'elements' => 'Показывать==1',
          'rank' => 1,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'columns' => '1',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'org_btn_url' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'number',
          'name' => 'org_btn_url',
          'caption' => 'Ссылка на страницу (ID страницы)',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => '',
          'rank' => 20,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'allowDecimals' => 'false',
            'allowNegative' => 'false',
            'decimalPrecision' => '2',
            'decimalSeparator' => '.',
            'maxValue' => '',
            'minValue' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'org_btn_title' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'org_btn_title',
          'caption' => 'Надпись на кнопке',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => '',
          'rank' => 10,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'show_org_btn' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'checkbox',
          'name' => 'show_org_btn',
          'caption' => 'Кнопка "ОРГАНИЗАЦИЯМ"',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => 'Показывать==1',
          'rank' => 1,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'columns' => '1',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'prepare_btn_icon' => 
      array (
        'fields' => 
        array (
          'id' => 16,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'image',
          'name' => 'prepare_btn_icon',
          'caption' => 'Иконка на кнопке',
          'description' => '',
          'editor_type' => 0,
          'category' => 13,
          'locked' => false,
          'elements' => '',
          'rank' => 5,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'allowDecimals' => 'false',
            'allowNegative' => 'false',
            'decimalPrecision' => '2',
            'decimalSeparator' => '.',
            'maxValue' => '',
            'minValue' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'prepare_btn_title' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'prepare_btn_title',
          'caption' => 'Надпись на кнопке',
          'description' => '',
          'editor_type' => 0,
          'category' => 13,
          'locked' => false,
          'elements' => '',
          'rank' => 10,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'prepare_btn_url' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'number',
          'name' => 'prepare_btn_url',
          'caption' => 'Ссылка на страницу (ID страницы)',
          'description' => '',
          'editor_type' => 0,
          'category' => 13,
          'locked' => false,
          'elements' => '',
          'rank' => 20,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'allowDecimals' => 'false',
            'allowNegative' => 'false',
            'decimalPrecision' => '2',
            'decimalSeparator' => '.',
            'maxValue' => '',
            'minValue' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'show_prepare_btn' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'checkbox',
          'name' => 'show_prepare_btn',
          'caption' => 'Кнопка "Подготовка к обработке"',
          'description' => '',
          'editor_type' => 0,
          'category' => 13,
          'locked' => false,
          'elements' => 'Показывать==1',
          'rank' => 1,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'columns' => '1',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'order_btn_icon' => 
      array (
        'fields' => 
        array (
          'id' => 45,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'image',
          'name' => 'order_btn_icon',
          'caption' => 'Иконка на кнопке',
          'description' => '',
          'editor_type' => 0,
          'category' => 21,
          'locked' => false,
          'elements' => '',
          'rank' => 2,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'order_btn_title' => 
      array (
        'fields' => 
        array (
          'id' => 42,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'order_btn_title',
          'caption' => 'Надпись на кнопке',
          'description' => '',
          'editor_type' => 0,
          'category' => 21,
          'locked' => false,
          'elements' => '',
          'rank' => 10,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'order_btn_url' => 
      array (
        'fields' => 
        array (
          'id' => 43,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'number',
          'name' => 'order_btn_url',
          'caption' => 'Ссылка на страницу (ID страницы)',
          'description' => '',
          'editor_type' => 0,
          'category' => 21,
          'locked' => false,
          'elements' => '',
          'rank' => 20,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'allowDecimals' => 'false',
            'allowNegative' => 'false',
            'decimalPrecision' => '2',
            'decimalSeparator' => '.',
            'maxValue' => '',
            'minValue' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'show_order_btn' => 
      array (
        'fields' => 
        array (
          'id' => 44,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'checkbox',
          'name' => 'show_order_btn',
          'caption' => 'Кнопка "Заключить договор"',
          'description' => '',
          'editor_type' => 0,
          'category' => 21,
          'locked' => false,
          'elements' => 'Показывать==1',
          'rank' => 1,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'columns' => '1',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);