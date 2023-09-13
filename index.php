<?php
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if ($_GET) {
  setcookie("fpx", $_GET['fpx'], time() + $period_cookie);
  setcookie("gtm", $_GET['gtm'], time() + $period_cookie);
}

$fpx = isset($_GET['fpx']) ? $_GET['fpx'] : $_COOKIE['fpx'];
$gtm = isset($_GET['gtm']) ? $_GET['gtm'] : $_COOKIE['gtm'];

?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=480">
  <title>ЕЛЕГАНТНА СУКНЯ </title>

  <meta name="description" content="" />
  <link rel="shortcut icon" href="index.php" />
  <link rel="icon" href="files/favicon.png">

  <link rel="stylesheet" href="files/reset4a3c6.css" type="text/css">

  <link rel="stylesheet" href="files/styles8ca58.css" type="text/css">
  <script>
    function sclClickPixelFn() {
      const url = new URL(document.location.href).searchParams;
      const a = url.get('a'); // Your ID. Example: const a = "XX";
      if (a) {
        const availableParams = ['aff_click_id', 'sub_id1', 'sub_id2', 'sub_id3', 'sub_id4', 'sub_id5', 'aff_param1', 'aff_param2', 'aff_param3', 'aff_param4', 'aff_param5', 'idfa', 'gaid'];
        const t = new URL('https://odiya.scaletrk.com/click');
        const r = t.searchParams;
        r.append('a', a);
        r.append('o', '12');
        r.append('return', 'click_id');
        if (availableParams?.length > 0) {
          availableParams.forEach((key) => {
            const value = url.get(key);
            if (value) {
              r.append(key, value);
            }
          });
        }
        fetch(t.href).then((e) => e.json()).then((e) => {
          const c = e.click_id;
          if (c) {
            const expiration = 864e5 * 365;
            const o = new Date(Date.now() + expiration);
            document.cookie = 'click_id=' + c + ';expires=' + o;
            document.cookie = 'aff_id=' + a + ';expires=' + o;
          }
        });
      }
    }
    sclClickPixelFn();
  </script>

  <?php if ($fpx) { ?>
    <!-- Facebook Pixel Code -->
    <script>
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', "<?= $fpx ?>");
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $fpx ?>&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
  <?php
  };
  ?>
  <?php if ($gtm) { ?>
    <!-- Google Tag Manager -->
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', "<?= $gtm ?>");
    </script>
    <!-- End Google Tag Manager -->
  <?php
  };
  ?>
</head>

<body>
  <?php if ($gtm) { ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <?php
  };
  ?>
  <div class="main_wrapper">

    <!-- header 3 -->
    <header class="offer_section offer3">

      <h1 class="main_title">НОВИНКА 2023 РОКУ</h1>


      <div class="info_block">
        <p class="subtitle">СТИЛЬНА СУКНЯ ВІЛЬНОГО КРОЮ </p>
        <div class="discount"><b>40% знижка</b></div>



        <img src="files/offer1.jpg" alt="">
      </div>

      <div class="price_block">
        <div class="yellow_line"></div>
        <div class="price_item old">
          <div class="text">Звичайна ціна:</div>
          <div class="value">1609грн</div>
        </div>
        <div class="price_item new">
          <div class="text">Ціна зі знижкою:</div>
          <div class="value">965грн</div>
        </div>
      </div>

      <div class="benefits_block clearfix">

        <div class="benefit_item">

          <img src="files/benefit1.jpg" alt="">
          <p>ЯСКРАВІ КОЛЬОРИ</p>
        </div>

        <div class="benefit_item">
          <img src="files/benefit2.jpg" alt="">
          <p>ВИСОКА ЯКІСТЬ</p>
        </div>
        <div class="benefit_item">

          <img src="files/benefit3.jpg" alt="">

          <p>ПРЕМІУМ ТКАНИНА</p>
        </div>
      </div>

      <a href="#cat" class="button">Замовити плаття</a>

    </header>

    <br>
    <div class="catitem">
      <h2 class="title"><span>ЯК СУКНЯ</span>
        ВИГЛЯДАЄ НАЖИВО!</h2>
    </div>
    <section>
      <ul class="bxslider">
        <video controls="true" width="100%" height="600" autoplay loop muted="">
          <source src="files/372l.mp4">
        </video>
      </ul>
    </section>
    <br>

    <section class="description_section">
      <h2 class="title"><span>Опис</span> сукні</h2>
      <ul class="characteristics__list">
        <li><b>Тканина:</b> турецький мікровельвет високої якості </li>
        <li><b>Зріст моделі:</b> 170см </li>
        <li><b>Країна виробник:</b> Україна</li>
        <li><b>Кольори:</b> графіт, фреза, марсала, хакі</li>
        <li><b>Розміри:</b> 50-60</li>
        <li>
          <table class="size" width="100%">
            <tbody>

              <tr align="center" height="35">
                <td>Розмір</td>
                <td>50-52</td>
                <td>54-56</td>
                <td>58-60</td>
              </tr>
              <tr align="center" height="35">
                <td>Обхват грудей</td>
                <td>100-108</td>
                <td>108-116</td>
                <td>116-122</td>
              </tr>
              <tr align="center" height="35">
                <td>Довжина сукні</td>
                <td>110</td>
                <td>112</td>
                <td>114</td>
              </tr>
              <tr align="center" height="35">
                <td>Довжина рукава</td>
                <td>40</td>
                <td>41</td>
                <td>42</td>
              </tr>


            </tbody>
          </table>
        </li>
        <br>
        <center>*залиште заявку і ми надамо вам пораду за розміром!</center>

      </ul>

    </section><br>
    <section class="cat" id="cat">
      <div class="catitem">
        <h2 class="title"><span>Оберіть свій колір</span> сукні </h2>
      </div>
      <center>Сукня в різних ракурсах </center>
      <br>
      <ul class="bxslider">
        <li>
          <div><img src="files/h1.jpg" alt=""></div>
        </li>
        <li>
          <div><img src="files/h2.jpg" alt=""></div>
        </li>
        <li>
          <div><img src="files/h3.jpg" alt=""></div>
        </li>

      </ul>
    </section>
    <br>
    <div class="catitem">
      <div class="clearfix">
        <h3>Колір хакі</h3>
        <div class="catprice clearfix">
          <div class="cp-left"><span>-40%</span>
            <p>1609грн</p>
          </div>
          <div class="cp-right"><span>Ціна зі знижкою:</span>
            <p>965грн</p>
          </div>
        </div>
      </div>

      <a href="#order_form" rel='3' class="button zakaz">Оформити замовлення</a>
    </div>
    <br>
    <ul class="bxslider">
      <li>
        <div><img src="files/m1.jpg" alt=""></div>
      </li>
      <li>
        <div><img src="files/m2.jpg" alt=""></div>
      </li>
      <li>
        <div><img src="files/m3.jpg" alt=""></div>
      </li>


    </ul>
    </section>
    <br>
    <div class="catitem">
      <div class="clearfix">
        <h3>Колір марсала</h3>
        <div class="catprice clearfix">
          <div class="cp-left"><span>-40%</span>
            <p>1609грн</p>
          </div>
          <div class="cp-right"><span>Ціна зі знижкою:</span>
            <p>965грн</p>
          </div>
        </div>
      </div>

      <a href="#order_form" rel='3' class="button zakaz">Оформити замовлення</a>
    </div>
    <br>
    <ul class="bxslider">
      <li>
        <div><img src="files/g1.jpg" alt=""></div>
      </li>
      <li>
        <div><img src="files/g2.jpg" alt=""></div>
      </li>
      <li>
        <div><img src="files/g3.jpg" alt=""></div>
      </li>

    </ul>
    </section>
    <br>
    <div class="catitem">
      <div class="clearfix">
        <h3>Колір графіт</h3>
        <div class="catprice clearfix">
          <div class="cp-left"><span>-40%</span>
            <p>1609грн</p>
          </div>
          <div class="cp-right"><span>Ціна зі знижкою:</span>
            <p>965грн</p>
          </div>
        </div>
      </div>

      <a href="#order_form" rel='3' class="button zakaz">Оформити замовлення</a>
    </div>
    <br>
    <br>
    <ul class="bxslider">
      <li>
        <div><img src="files/f1.jpg" alt=""></div>
      </li>
      <li>
        <div><img src="files/f2.jpg" alt=""></div>
      </li>
      <li>
        <div><img src="files/f3.jpg" alt=""></div>
      </li>

    </ul>
    </section>
    <br>
    <div class="catitem">
      <div class="clearfix">
        <h3>Колір фреза</h3>
        <div class="catprice clearfix">
          <div class="cp-left"><span>-40%</span>
            <p>1609грн</p>
          </div>
          <div class="cp-right"><span>Ціна зі знижкою:</span>
            <p>965грн</p>
          </div>
        </div>
      </div>

      <a href="#order_form" rel='3' class="button zakaz">Оформити замовлення</a>
    </div>
    <br>
    <br>


    <!-- /description --><!-- reviews 3 -->
    <br>
    <section class="reviews3_section">
      <h2 class="title"><span>Відгуки</span> покупців</h2>
      <div class="reviews_list">
        <div class="review_item">
          <div class="author_block clearfix">
            <img src="files/ava1.jpg" alt="">
            <div class="author_info">
              <div class="name">Ірина</div>
              <div class="text">43 роки</div>
            </div>
            <div class="info">
              <div class="rating"></div>
              <div class="date">28.07.2023</div>
            </div>
          </div>
          <p> Прекрасна сукня, якістю та кольором задоволена на всі 100! Спасибі! </p>
        </div>

        <div class="review_item">
          <div class="author_block clearfix"><img src="files/ava2.jpg" alt="">
            <div class="author_info">
              <div class="name">Валентина</div>
              <div class="text">41 рік</div>
            </div>
            <div class="info">
              <div class="rating"></div>
              <div class="date">03.08.2023</div>
            </div>
          </div>
          <p> Плаття - 10 із 10!!! Консультанти допомогли з вибором розміру та кольором – все підійшло ідеально та кольором дуже задоволена. Ціна дуже приємна також. Велике спасибі вашому магазину! </p>
        </div>

        <div class="review_item">
          <div class="author_block clearfix"><img src="files/ava3.jpg" alt="">
            <div class="author_info">
              <div class="name">Марина</div>
              <div class="text">34 роки</div>
            </div>
            <div class="info">
              <div class="rating"></div>
              <div class="date">02.08.2023</div>
            </div>
          </div>
          <p> Велике спасибі за оперативну доставку та консервативну вартість якісної сукні! Звертатимуся ще! </p>
        </div>
      </div>
    </section>

    <!-- /reviews 3 -->
    <!-- order steps 1 -->
    <div class="tlt">

      <h2 class="title"><span>Як зробити</span><br> замовлення?</h2>
    </div>
    <div class="order_steps1">
      <div class="step_item">
        <div class="step_wrapper"><img src="files/order_steps__step1_icon15b1b.png" alt="">

          <h4>Замовлення</h4>
          <p>Залиште замовлення внизу сторінки</p>
        </div>
      </div>
      <div class="step_item">
        <div class="step_wrapper">
          <img src="files/order_steps__step2_icon95bea.png" alt="">

          <h4>Дзвінок</h4>
          <p>Наш менеджер уточнить деталі замовлення</p>
        </div>
      </div>
      <div class="step_item">
        <div class="step_wrapper">
          <img src="files/order_steps__step3_icon9469b.png" alt="">

          <h4>Відправлення</h4>
          <p>Доставимо Ваше замовлення Новою Поштою</p>
        </div>
      </div>
      <div class="step_item">
        <div class="step_wrapper">
          <img src="files/order_steps__step4_icone6b9d.png" alt="">

          <h4>Отримання</h4>
          <p>Сплачуйте при отриманні на відділенні</p>
        </div>
      </div>
    </div>

    <!-- Доставка/оплата-v3 -->
    <div class="tlt">
      <section class="delivery-block-v3">
        <ul class="delivery-cont">
          <li>
            <h3>Доставка</h3>
            <p>Доставляємо Новою Поштою по всій Україні. Вартість за тарифами Нової Пошти</p>
          </li>
          <li>
            <h3>Безпечна оплата</h3>
            <p>Ви оплачуєте замовлення за фактом отримання виробу на руки з комісією або без комісії переказом на банківську картку</p>
          </li>
          <li>
            <h3>Обмін, повернення та гарантії</h3>
            <p>Ми завжди перевіряємо товар перед відправкою і гарантуємо 100% якість.</p>
            <p>Обмін і повернення протягом 14 днів!</p>
          </li>

        </ul>
      </section>
    </div>

    <!-- order 3 -->
    <section class="offer_section offer3 order">
      <h1 class="main_title">НОВИНКА 2023 РОКУ</h1>
      <div class="info_block">
        <p class="subtitle">СТИЛЬНА СУКНЯ ВІЛЬНОГО КРОЮ</p>
        <div class="discount"><b>40% скидка</b></div>


        <img src="files/offer1.jpg" alt="">
      </div>

      <div class="price_block">
        <div class="yellow_line"></div>
        <div class="price_item old">
          <div class="text">Звичайна ціна:</div>
          <div class="value">1609грн</div>
        </div>
        <div class="price_item new">
          <div class="text">Ціна зі знижкою:</div>
          <div class="value">965грн</div>
        </div>
      </div>

      <div class="benefits_block clearfix">

        <div class="benefit_item">

          <img src="files/benefit1.jpg" alt="">
          <p>ЯСКРАВІ КОЛЬОРИ</p>
        </div>

        <div class="benefit_item">
          <img src="files/benefit2.jpg" alt="">
          <p>ВИСОКА ЯКІСТЬ</p>
        </div>
        <div class="benefit_item">

          <img src="files/benefit3.jpg" alt="">

          <p>ПРЕМІУМ ТКАНИНА</p>
        </div>
      </div>

      <p align="center">Для замовлення та консультації заповніть форму:</p>
      <br>
      <form id="order_form" class="order_form" action="form_handler.php" method="post">

        <input class="field" type="text" name="name" placeholder="Введіть ваше ім'я" required>
        <input class="field" type="tel" name="phone" placeholder="Введіть ваш телефон" required>
        <div style="margin: 0 auto 25px;font-size: 15px; text-align: center; color: #000;" bis_skin_checked="1">
          <input id="data1" type="checkbox" checked required style="appearance: auto;">
          <label for="data1">Я погоджуюся з політикою конфіденційності</label>
        </div>
        <button class="button" id="submit_btn">Оформити замовлення</button>
      </form>

    </section>
    <!-- /order 3 -->
    <!-- footer -->
    <footer class="footer_section">
      <p>Виробництво в Україні
        <br>
        49000, м. Днiпро, пл. Старокодацька, 12
        <br>ТОВ "Модний Тиждень"
      </p>
      <br>
      <a href="politics.html" target="_blank">Політика конфіденційності</a>
      <br>
      <a href="refund.html" target="_blank">Гарантії та повернення</a> <br>
      <a href="ugoda.html" target="_blank">Угода Користувача</a>
    </footer><!-- /footer -->

    <div class="popap-wrap">
      <div class="popap">
        <div class="popap__title">
          Оформлення замовлення
        </div>
        <div class="loader">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </div>
      </div>
    </div>

    <style>
      .popap-wrap {
        display: none;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.329);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        align-items: center;
      }

      .popap {
        display: flex;
        background: rgb(255, 255, 255);
        border-radius: 20px;
        border: 1px solid rgb(150, 150, 150);
        margin: 0 auto;
        width: 90%;
        max-width: 480px;
        padding: 60px 15px;
        justify-content: center;
        flex-direction: column;
      }

      .popap__title {
        text-align: center;
        font-weight: 600;
        font-size: 1.2rem;
        text-align: center;

      }

      .loader {
        margin: 40px auto 0;
        display: flex;
        justify-content: space-between;
        width: 100px;
      }

      .circle {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background-color: #FED121;
        animation: scaleUp 1.2s ease-in-out infinite;
      }

      .circle:nth-child(2) {
        animation-delay: 0.2s;
      }

      .circle:nth-child(3) {
        animation-delay: 0.4s;
      }

      .circle:nth-child(4) {
        animation-delay: 0.6s;
      }


      @keyframes scaleUp {

        0%,
        100% {
          transform: scale(1);
        }

        50% {
          transform: scale(1.3);
        }
      }
    </style>
  </div>
  <!-- scripts -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=cyrillic" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="bxslider/jquery.bxslider.js">
  </script>
  <link href="bxslider/jquery.bxslider.css" rel="stylesheet">

  <script>
    $(document).ready(function() {

      $('.bxslider').bxSlider();

    });
  </script>
  <script>
    $(function() {

      $('.zakaz').click(function() {

        ind = $(this).attr('rel');

        $('#select option').removeAttr('selected');

        $('#select').children('option').eq(ind).attr("selected", "selected");

      });


    });
  </script>
  <script src="files/scripts6085f.js">
  </script>
  <script>
    function identifyDate(e) {
      var t = new Date;
      t.setTime(t.getTime() + 864e5 * e);
      var a = t.getDate(),
        n = t.getMonth() + 1,
        r = t.getFullYear();
      return (a > 9 ? a : "0" + a) + "." + (n > 9 ? n : "0" + n) + "." + r
    }

    function printCommentsDate(m) {
      for (var t = $(m).length, e = 0; e <= t; e++) $(m + ":eq(" + (t - e) + ")").html(identifyDate(-e))
    }
    printCommentsDate('.date');
  </script>

  <script>
    const form = document.getElementById("order_form")
    const button = document.getElementById("submit_btn");

    // Додаємо обробник події на кнопку
    button.addEventListener("click", function() {
      const requiredFields = form.querySelectorAll("[required]");

      // Перевіряємо, чи всі обов'язкові поля заповнені
      let allFieldsFilled = true;
      requiredFields.forEach(field => {
        if (!field.value) {
          allFieldsFilled = false;
        }
      });

      // Виводимо повідомлення з результатом перевірки
      if (allFieldsFilled) {
        button.disabled = true;
        button.style.opacity = ".5"
        const popapWrap = document.querySelector(".popap-wrap");
        popapWrap.style.display = "flex";
        form.submit();
      } else {
        return;
      }
    });
  </script>

</body>

</html>