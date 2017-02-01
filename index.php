<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Star Wars</title>
    <link rel="stylesheet" type="text/css" href="public/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="public/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="public/css/main.css" />
    <meta name="format-detection" content="telephone=no">
</head>
<body>
<?php
 $catalog_array = array(
     0=>array(
        'name'=>'MILLENIUM FALCON ',
        'preview_img_mini'=>'public/images/products/Icons/Millenium_Falcon.jpg',
        'preview_img'=>'public/images/products/Millenium_Falcon.jpg',
        'price'=>'199грн',
     ),
     1=>array(
         'name'=>'IMPERIAL STAR DESTROYER',
         'preview_img_mini'=>'public/images/products/Icons/Star_Destroyer.jpg',
         'preview_img'=>'public/images/products/Star_Destroyer.jpg',
         'price'=>'199грн',
     ),
     2=>array(
         'name'=>'Destroyer Droid',
         'preview_img_mini'=>'public/images/products/Icons/Destroyer_Droid.jpg',
         'preview_img'=>'public/images/products/Destroyer_Droid.jpg',
         'price'=>'199грн',
     ),
     3=>array(
         'name'=>'X-WING FIGHTER',
         'preview_img_mini'=>'public/images/products/Icons/X_Wing.jpg',
         'preview_img'=>'public/images/products/X_Wing.jpg',
         'price'=>'199грн',
     ),
     4=>array(
         'name'=>'Tie Fighter',
         'preview_img_mini'=>'public/images/products/Icons/TIE_Fighter.jpg',
         'preview_img'=>'public/images/products/TIE_Fighter.jpg',
         'price'=>'199грн',
     ),
     5=>array(
         'name'=>'AT-AT WALKER',
         'preview_img_mini'=>'public/images/products/Icons/AT_AT.jpg',
         'preview_img'=>'public/images/products/AT_AT.jpg',
         'price'=>'199грн',
     ),
     6=>array(
         'name'=>'Tie Advanced',
         'preview_img_mini'=>'public/images/products/Icons/TIE_Advanced.jpg',
         'preview_img'=>'public/images/products/TIE_Advanced.jpg',
         'price'=>'199грн',
     ),
     7=>array(
         'name'=>'R2-D2',
         'preview_img_mini'=>'public/images/products/Icons/R2D2.jpg',
         'preview_img'=>'public/images/products/R2D2.jpg',
         'price'=>'199грн',
     ),
     8=>array(
         'name'=>'AT-ST',
         'preview_img_mini'=>'public/images/products/Icons/AT_ST.jpg',
         'preview_img'=>'public/images/products/AT_ST.jpg',
         'price'=>'199грн',
     ),
     9=>array(
         'name'=>'Kylo Ren\'s Shuttle',
         'preview_img_mini'=>'public/images/products/Icons/Kylo_Ren.jpg',
         'preview_img'=>'public/images/products/Kylo_Ren.jpg',
         'price'=>'199грн',
     )
 );
?>
<div class="main-bg"></div>
<div class="section sec1" id="sec1">
    <header>
        <a href="#sec1" class="section-btn" data-href="#sec1">
            <img src="public/images/logo.png" class="logo" alt="">
            <img class="logo_scr" src="public/images/header_scroll_icon.png">
        </a>
        <div class="nav">
            <div class="nav_item"><a class="section-btn" href="#sec2" data-href="#sec2">Фото</a></div>
            <div class="nav_item"><a class="section-btn" href="#sec3" data-href="#sec3">Про товар</a></div>
            <div class="nav_item"><a class="section-btn" href="#sec4" data-href="#sec4">Відгуки</a></div>
            <div class="nav_item"><a class="section-btn" href="#sec5" data-href="#sec5">Доставка</a></div>
        </div>
        <div class="right-pos">
            <p class="tell">+38 (093) 914-69-72</p>
            <a href="" class="zvonok1 buy-btn">Замовити</a>
        </div>
    </header>
    <div class="section-content">
        <div class="title-wrap wow flipInX" data-wow-delay=".3s">
            Металевий
            <div class="center-text"></div>
            конструктор
        </div>
        <img src="public/images/star-wars.png" class="starwars wow bounceIn" alt="Star Wars" >
        <div class="btns-wrap wow flipInX" data-wow-delay=".3s">
            <a class="btn buy-btn" href="#win5">Замовити</a>
            <a href="#sec2" data-href="#sec2" class="btn btn2 section-btn">Дивитись в каталозі</a>
        </div>
    </div>
</div>
<div class="section sec2" id="sec2">
    <div class="section-title wow zoomIn">
        Каталог продукції
    </div>
    <div class="swiper-container">
        <div class="tabs">
            <?php
            $i = 0;
            $count_items = count($catalog_array);
            $chet = $count_items%2 == 0;
            $bounceRight = 0;
            if($chet){
                $bounceLeft=1*($count_items/2);
            } else {
                $bounceLeft=1*(($count_items-1)/2);
            }
            foreach ($catalog_array as $item){
                if($bounceLeft <= 0){
                    $class = 'bounceInRight';
                    $time = $bounceRight;
                } else {
                    $class = 'bounceInLeft';
                    $time = $bounceLeft;
                }

                echo '<a href="#" class="'.($i==0?"active":"").' wow '.$class.'" data-wow-delay=".'.$time.'s">
                    <img src="'.$item['preview_img_mini'].'" alt="">
                </a>';
                if($bounceLeft <= 0){
                    $bounceRight++;
                } else {
                    $bounceLeft--;
                }
                $i++;
            }
            ?>
        </div>
        <div class="swiper-wrapper">
            <?php
            foreach ($catalog_array as $item){
                echo '<div class="swiper-slide">
                    <img src="'.$item['preview_img'].'" data-description="'.$item['name'].'" />
                    <div class="product-title">'.$item['name'].'</div>
                    <div class="scroll-view">Дивитись в 3D</div>
                    <div class="price-wrap">
                        Ціна:<strong>'.$item['price'].'</strong><br>
                        <div class=buy-btn">Замовити</div>
                    </div>
                </div>';
            }
            ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<div class="section sec3" id="sec3">
    <div class="section-title wow zoomIn">Хочете купити крутий подарунок?</div>
    <p class="section-descr wow zoomIn">У нас найкращий 3D конструктор!</p>
    <div class="box-descr">
        <div class="wow zoomInRight">
            <div class="box-descr__item">
                <img src="public/images/package1.png" alt="">
                    <strong>Елітна упаковка</strong><br>
                    Для надання конструктору дійсно подарочного
                    виду упаковка виготовлена у вигляді конверта з дизайнерського
                    матового картону з глянцевим логотипом Star Wars.
                    Це слугує чудовим доповненням для 3D конструктора.
            </div>
            <div class="box-descr__item">
                <img src="public/images/package2.png" alt="" class="img-package">
                <br>
                    <strong>Висока деталізація всіх моделей</strong><br>
                Металевий конструктор Star Wars для самостійного складання
                виконаний із тонкого обрабленого лазером металу.
                Всі елементи ідеально деталізовані, що дає Вам
                можливість не тільки цікаво провести час за
                складанням конструктора, але і потішитись естетичним
                виконанням компонентів.
                <br>
                <br>
                Star Wars 3D конструктор - найкращий подарунок для фанатів Зоряних Війн!
                <br>
                <br>
                Рекомендується дітям від 12 років.
            </div>
        </div>
    </div>
    <div class="btns-wrap wow bounceIn" data-wow-delay=".2s">
        <a class="btn buy-btn" href="#win5">Замовити</a>
        <a href="#sec2" data-href="#sec2" class="btn section-btn cust-ntn">Дивитись в каталозі</a>
    </div>
    <div class="video-title">Відео складання</div>
    <div class="video-wrap">
        <div class="joda">
            <img src="public/images/Master_Yoda.png" alt="">
            <div class="text">Відео складання подивись</div>
        </div>
        <div class="video-frame" data-vid="0">
            <iframe id="player2" type="text/html" width="640" height="360"
                    src="http://www.youtube.com/embed/gC6-diChIpc"
                    frameborder="0" data-id="2"  allowfullscreen></iframe>
            <iframe id="player" type="text/html" width="640" height="360"
                    src="http://www.youtube.com/embed/2Ls51GBJmyQ"
                    frameborder="0" data-id="0" allowfullscreen></iframe>
            <iframe id="player1" type="text/html" width="640" height="360"
                    src="http://www.youtube.com/embed/u20hpp1WzPk"
                    frameborder="0" data-id="1"  allowfullscreen></iframe>
            <div class="prev-btn js-video-btn"></div>
            <div class="next-btn js-video-btn"></div>
        </div>
    </div>
</div>
<div class="section sec4" id="sec4">
    <div class="section-title">Відгуки</div>
    <div class="comments">
            <div class="comments-item wow zoomIn" data-wow-delay=".1s">
                <img src="public/images/photo.png" alt="">
                <div class="text-wrap">
                    <h1>Ярослав Трещётка</h1>
                    <p>В небольшом конвертике оказалось два листа тонкой стали с невероятно мелкими детальками покрытыми точнейшей миниатюрной гравировкой. Детализация выполнена очень точно. С нетерпением ожидаю когда выдастся свободный вечер, дабы засесть за сборку.</p>
                </div>
            </div>
            <div class="comments-item wow zoomIn" data-wow-delay=".2s">
                <img src="public/images/kom1.png" alt="">
                <div class="text-wrap">
                    <h1>Вячеслав Філев</h1>
                    <p>Добре деталізований металевий конструктор. Класна ідея для подарунку, я задоволений. Складати буду пізніше.</p>
                </div>
            </div>
        <br>
            <div class="comments-item wow zoomIn" data-wow-delay=".1s">
                <img src="public/images/kom11.png" alt="">
                <div class="text-wrap">
                    <h1>Александр Лысенко</h1>
                    <p>Собирается легко, инструкция понятна. Необходим пинцет и маленькие ножницы, а также немножко терпения. Закажу еще!</p>
                </div>
            </div>
            <div class="comments-item wow zoomIn" data-wow-delay=".2s">
                <img src="public/images/kom3.png" alt="">
                <div class="text-wrap">
                    <h1>Евгений Мусихин</h1>
                    <p>На фотографиях выглядит не так впечатляюще, как в реальности. А если ещё подсветить под правильным углом - выглядит вообще шикарно.</p>
                </div>
            </div>
    </div>
</div>


<div class="section sec5" id="sec5">
    <div class="section-title wow zoomIn">Як ми працюємо?</div>
    <p class="section-descr wow zoomIn" data-wow-delay=".1s">Наявність товару уточнюйте у наших менеджерів.</br>Зроби подарунок дорогій людині!</p>
    <div class="list">
        <div class="compare-item">
            <div class="list-item wow fadeIn" data-wow-delay=".1s">
                 Залишаєте заявку
                <img src="public/images/last-slide/1.png" class="" alt="">
            </div>
            <div class="list-item wow fadeIn" data-wow-delay=".3s">
                Зв'язуємся по телефону
                <img src="public/images/last-slide/2.png" class="" alt="">
            </div>
        </div>
        <div class="compare-item">
            <div class="list-item wow fadeIn" data-wow-delay=".5s">
                Відправляємо товар
                <img src="public/images/last-slide/3.png" class="" alt="">
            </div>
            <div class="list-item wow fadeIn" data-wow-delay=".7s">
                Отримуєте і оплачуєте
                <img src="public/images/last-slide/4.png" class="" alt="">
            </div>
        </div>
    </div>
    <div class="btns-wrap">
        <a class="btn buy-btn wow bounceIn" href="#win5" data-wow-delay=".7s">Замовити</a>
    </div>
    <p class="buy-descr">Зробіть замовлення в один клік!</br>Тут і зараз!</p>
    <p class="footer-descr">Після реєстрації вашої заявки на цьому сайті оператор розгляне її, та найближчим часом менеджер зв'яжеться з Вами. Після чого ми відправляємо замовлення службою доставки.</br>Ми раді що Ви з нами!</p>
    <div class="footer">
        <a href="https://www.facebook.com/StarWars3DMetalpuzzle/?ref=aymt_homepage_panel" target="_blank" class="soc-btn"><img class="face" src="public/images/facebook.png" alt="Facebook"></a>
        <a href="https://vk.com/metal3dpuzzlestarwars" target="_blank" class="soc-btn"><img class="face" src="public/images/vk.png" alt="Vkontakte"></a>
        <div class="tel-foot">

            <p class="tell">+38(093) 914 69 72</p></div>
        <p class="textf">Всі права захищені 2017</p>
    </div>
</div>

<div class="modal" id="rotate">
    <div class="modal-content">
        <div class="cross">&#10005;</div>
        <div class="title-line">

        </div>
        <div id="carousel">
            <img class="cloud9-item" src="public/images/products/AT_AT/1.jpg">
        </div>
    </div>
</div>
<div class="modal" id="buy">
    <div class="modal-content">
        <div class="cross">&#10005;</div>
        <div class="buy-wrap">
            <form id="contact" method="post" action="send.php">
                <input name="name" placeholder="Вкажіть Ваше ім'я" class="name" type="text" required />
                <input name="phone" placeholder="Вкажіть Ваш телефон" class="tel" type="text" required />
                <input name="email" placeholder="Вкажіть Ваш Email" class="email" type="text" required />
                <textarea rows="4"  name="subject"  type="submit" placeholder="Напишіть назву моделі:"  class="message"></textarea>
                <input name="submit" class="btn" type="submit" value="Відправити" />
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="public/js/libs.min.js"></script>
<script type="text/javascript" src="public/js/main.min.js"></script>
</body>
</html>
