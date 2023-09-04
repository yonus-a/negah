<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>اتالیه نگاه</title>
    <link rel="stylesheet" href="style.css" />
    <script defer src="main.js"></script>
    <!-- swiper CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  </head>
  <body>
    <?php require("header.php") ?>
    <main>
      <section class="hero" aria-label="hero">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="public/images/image1.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="public/images/iamge2.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="public/images/image3.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="public/images/image4.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="public/images/image5.jpg" alt="" />
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <section class="about" aria-label="about">
          <h2>معرفی آتلیه نگاه</h2>
          <p>
            تالیه عکاسی نگاه یکی از معروف‌ترین و محبوب‌ترین اتالیه‌های عکاسی در
            شهر ماست. با سابقه‌ای بیش از 10 سال در عرصه عکاسی، این اتالیه با
            تیمی حرفه‌ای و تجربه‌ای وسیع در زمینه عکاسی عروس، عکاسی فشن و عکاسی
            خانوادگی به خدمت مشتریان خود می‌رسد. یکی از ویژگی‌های بارز اتالیه
            نگاه استفاده از تجهیزات پیشرفته و به‌روز در عکاسی است. این اتالیه از
            دوربین‌های حرفه‌ای و لنزهای با کیفیت بالا استفاده می‌کند تا بهترین
            نتیجه را در عکاسی برای مشتریان خود به ارمغان آورد. همچنین، اتالیه
            نگاه بده از نورپردازی حرفه‌ای استفاده می‌کند تا تصاویری زیبا و
            شگفت‌انگیز را برای مشتریان خود ایجاد کند. تیم عکاسان حرفه‌ای اتالیه
            نگاه با بهره‌گیری از تجربه و هنر خود، توانسته‌اند در عکاسی عروس به
            یکی از برترین‌ها در شهر ما تبدیل شوند. آنها با دقت و حساسیت بالا به
            جزئیات، لحظات زیبا و احساسات صادقه زوج‌های عروس و داماد را در تصاویر
            خود به تصویر می‌کشند. از لحظه آماده‌سازی عروس تا لحظه برگزاری مراسم
            و جشن عروسی، تیم عکاسان
          </p>
        </section>
        <section class="locations" aria-label="locations">
          <h2>لوکیشن های عکاسی</h2>
          <div class="gallary">
            <img src="public/images/location1.jpg" alt="" />
            <img src="public/images/location2.jpg" alt="" />
            <img src="public/images/location3.jpg" alt="" />
            <img src="public/images/location4.jpg" alt="" />
          </div>
        </section>
        <section class="booking" aria-label="booking">
          <h2>رزرو نوبت</h2>
          <form>
            <div class="input-group">
              <label for="name"> نام و نام خانوادگی </label>
              <input type="text" id="name" name="name" required />
            </div>
            <div class="input-group">
              <label for="number">شماره تماس</label>
              <input
                type="tel"
                id="number"
                name="number"
                pattern="[0-9]{11}"
                required
              />
            </div>
            <div class="input-group">
              <label for="services">خدمات</label>
              <select id="services" name="services" required>
                <option selected>عروس داماد</option>
                <option>کودک</option>
                <option>بارداری</option>
                <option>نوزاد</option>
                <option>مدلینگ</option>
                <option>تبلیغاتی</option>
                <option>متفرقه</option>
              </select>
              <div class="input-group">
                <label for="date"></label>
                <input type="date" name="date" id="date" required />
              </div>
              <button type="submit">رزرو نوبت</button>
            </div>
          </form>
        </section>
        <section class="map" aria-label="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13780.553865612523!2d57.02617700787352!3d30.29011949020125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f021992c95d111b%3A0xed8664e1723e1e52!2z2KLYqtmE24zZhyDYqtiv2KfYuduM!5e0!3m2!1sen!2s!4v1691226031580!5m2!1sen!2s"
            width="1280"
            height="720"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </section>
      </div>
    </main>
    <footer>
      <div class="container">
        <address>
          آدرس: کرمان ، خیابان امام جمعه ، نبش خیابان زهره کرمانی غربی
          <br />
          تلفن:‌ 03432458622
        </address>
        <nav aria-label="quick access links">
          <ul>
            <li>
              <a href="#">خانه</a>
            </li>
            <li>
              <a href="#">خدمات آتلیه نگاه</a>
            </li>
            <li>
              <a href="#">نمونه کارها</a>
            </li>
            <li>
              <a href="#">درباره ما</a>
            </li>
            <li>
              <a href="#">تماس باما</a>
            </li>
          </ul>
        </nav>
        <p class="copywrite">
          © کلیه حقوق مادی و معنوی این سایت برای آتلیه نگاه محفوظ می باشد.
        </p>
      </div>
    </footer>
  </body>
</html>
