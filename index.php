<!DOCTYPE html>
<html class="page" lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Барбершоп «Бородинский»</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin,cyrillic&amp;display=swap">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="page-body">

<header class="main-header">
  <nav class="main-navigation">
    <a class="main-header-logo">
      <img src="img\Vector.svg" width="420" height="200" alt="Барбершоп">
      <img src="img\Vector-2.svg" width="368" height="153" alt="«Бородинский»">
      <img src="img\усы.svg" width="200" height="200" alt ="Усы»">
    </a>
    <div class="main-navigation-wrapper">
      <div class="container">
        <ul class="site-navigation">
          <li><a href="index.php">Информация</a></li>
          <li><a href="index.php">Новости</a></li>
          <li><a href="price.php">Прайс-лист</a></li>
          <li><a href="catalog.php">Магазин</a></li>
          <li><a href="index.php">Контакты</a></li>
        </ul>
        <div class="user-navigation">
          <a class="login-link" href="login.php">Вход</a>
        </div>
      </div>
    </div>
  </nav>
</header>

<main class="container">

  <h1 class="visually-hidden">Барбершоп «Бородинский»</h1>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
        </div>
      </div>
      </div>
    </div>
<div class="contanier mt-5>
  <section class="features">
    <h2 class="visually-hidden">Преимущества</h2>
    <ul class="features-list">
      <li class="feature-item">
        <h3>Быстро</h3>
        <p>Мы делаем свою работу быстро! Время пролетят для вас незаметно,как итог, вы — счастливый обладатель стильной стрижки!</p>
      </li>
      <li class="feature-item">
        <h3>Круто</h3>
        <p>Забудьте, как вы стриглись раньше. Мы сделаем из вас звезду футбола или кино! Во всяком случае внешне.</p>
      </li>
      <li class="feature-item">
        <h3>Дорого</h3>
        <p>Наши мастера — профессионалы своего дела и не могут стоить дешево. К тому же, разве цена не дает определенный статус?</p>
      </li>
    </ul>
  </section>
</div>

  <div class="index-columns">

    <section class="news">
      <h2>Новости</h2>
      <ul class="news-list">
        <li class="news-item">
          <p>Нам наконец завезли Ягермайстер! Теперь вы можете пропустить стаканчик во время стрижки</p>
          <time datetime="2020-01-11">10 декабря</time>
        </li>
        <li class="news-item">
          <p>В нашей команде пополнение, Алексей Абайкин, обладатель множества титулов и наград пополнил наши стройные ряды</p>
          <time datetime="2020-01-18">25 декабря</time>
        </li>
      </ul>
      <a class="button" href="blank.php">Все новости</a>
    </section>

    <section class="gallery">
      <h2>Фотогалерея</h2>
      <div class="gallery-container">
        <figure class="gallery-content">
          <a href="#"><img src="img\photo.jpg" width="286" height="164" alt="Интерьер"></a>
        </figure>
        <button class="button gallery-button gallery-button-back" type="button" disabled>Назад</button>
        <button class="button gallery-button gallery-button-next" type="button">Вперед</button>
      </div>
    </section>

  </div>

  <div class="index-columns">

    <section class="contacts">
      <h2>Контактная информация</h2>
      <p>
        Барбершоп «Бородинский»<br>
        Адрес: г. Санкт-Петербург, Бассейная д. 8<br>
        Телефон: <a href="tel:+79177798480">+7 (917) 779-84-80</a>
      </p>
      <p>
        Время работы:<br>
        пн—пт: с 10:00 до 22:00<br>
        сб—вс: с 10:00 до 19:00
      </p>
      <a class="button contacts-button-map" href="blank.php"> Как проехать</a>
      <a class="button" href="blank.php">Обратная связь</a>
    </section>

    <section class="appointment">
      <h2>Записаться</h2>
      <p class="appointment-info">Укажите желаемую дату и время и мы свяжемся с вами для подтверждения брони</p>
      <form class="appointment-form" action="./sendToDataBase.php" method="post">
        <p class="appointment-item">
          <label for="appointment-date">Дата</label>
          <input id="appointment-date" type="text" name="date" placeholder="01.01.2020">
        </p>
        <p class="appointment-item">
          <label for="appointment-time">Время</label>
          <input id="appointment-time" type="text" name="time" placeholder="10:00">
        </p>
        <p class="appointment-item">
          <label for="appointment-name">Ваше имя</label>
          <input id="appointment-name" type="text" name="name" placeholder="Борода">
        </p>
        <p class="appointment-item">
          <label for="appointment-phone">Телефон</label>
          <input id="appointment-phone" type="tel" name="phone" placeholder="+7 000 000-00-00">
        </p>
        <button class="button" type="submit">Отправить</button>
      </form>
    </section>

  </div>

</main>

<footer class="main-footer">
  <div class="container">
    <section class="footer-contacts">
      <h2 class="visually-hidden"> </h2>Как нас найти</h2>
      <p>
        Барбершоп «Бородинский»<br>
        Адрес: г. Санкт-Петербург, Бассейная, д. 8<br>
        <a class="footer-address" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2003.0570785089621!2d30.30646611609402!3d59.86479838184941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963aa363bf287b%3A0x81ec54e38ab5660c!2z0YPQuy4g0JHQsNGB0YHQtdC50L3QsNGPLCA4LCDQodCw0L3QutGCLdCf0LXRgtC10YDQsdGD0YDQsywgMTk2MTkx!5e0!3m2!1sru!2sru!4v1640194827764!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> Как нас найти?</a><br>
        Телефон: <a class="footer-phone" href="tel:+79177798480">+7 (917)779-84-80</a>
      </p>
    </section>
    <section class="footer-social">
      <h2>Давайте дружить!</h2>
      <ul>
        <li>
          <a class="social-button" href="#">
            <span class="visually-hidden">Вконтакте</span>
            <svg width="27" height="16" viewBox="0 0 128 76"><path d="M125,5.15c.89-3,0-5.15-4.23-5.15h-14a6,6,0,0,0-6.09,4S93.59,21.31,83.5,32.59c-3.26,3.26-4.74,4.3-6.52,4.3-.89,0-2.18-1-2.18-4V5.15c0-3.56-1-5.15-4-5.15h-22a3.37,3.37,0,0,0-3.56,3.22c0,3.37,5,4.15,5.56,13.64V37.48c0,4.52-.82,5.34-2.6,5.34-4.74,0-16.29-17.43-23.13-37.38C23.72,1.57,22.38,0,18.8,0H4.8C.8,0,0,1.88,0,4c0,3.71,4.75,22.1,22.1,46.42C33.67,67,50,76,64.8,76c8.9,0,10-2,10-5.45V58c0-4,.84-4.8,3.66-4.8,2.08,0,5.64,1,13.94,9C101.9,71.74,103.46,76,108.8,76h14c4,0,6-2,4.85-6s-5.8-9.64-11.81-16.4c-3.27-3.86-8.16-8-9.64-10.09-2.08-2.67-1.49-3.86,0-6.23,0,0,17-24,18.83-32.18Z" fill="#fff"/></svg>
          </a>
        </li>
        <li>
          <a class="social-button" href="#">
            <span class="visually-hidden">Фейсбук</span>
            <svg width="19" height="22" viewBox="0 0 10.15 21.74"><path d="M3.34 1.12A4.77 4.77 0 0 1 6.53 0h3.61v3.81H7.81a1.07 1.07 0 0 0-1.09.83v2.55h3.42c-.08 1.23-.24 2.45-.41 3.67h-3v10.87H2.21V10.86H0V7.21h2.19V3.66a3.83 3.83 0 0 1 1.15-2.54z" fill="#fff"/></svg>
          </a>
        </li>
        <li>
          <a class="social-button" href="#">
            <span class="visually-hidden">Инстаграм</span>
            <svg width="20" height="20" viewBox="0 0 20 20"><path d="M18 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-8 6a4 4 0 1 1-4 4 4 4 0 0 1 4-4zM2.5 18a.47.47 0 0 1-.5-.5V9h2.1a3.4 3.4 0 0 0-.1 1 6 6 0 1 0 12 0 3.4 3.4 0 0 0-.1-1H18v8.5a.47.47 0 0 1-.5.5zM18 4.5a.47.47 0 0 1-.5.5h-2a.47.47 0 0 1-.5-.5v-2a.47.47 0 0 1 .5-.5h2a.47.47 0 0 1 .5.5z" fill="#fff"/></svg>
          </a>
        </li>
      </ul>
    </section>
    <p class="footer-copyright">
      <b>Разработано:</b> <a class="button" href="https://vk.com/away.php?to=https%3A%2F%2Finstagram.com%2Fwernasebe%3Futm_medium%3Dcopy_link&cc_key=">Wernasebe</a>
    </p>
  </div>
</footer>

<section class="modal modal-login">
  <h2>Личный кабинет</h2>
  <p class="modal-description">Введите пожалуйста свой логин и пароль</p>
  <form class="login-form" action="https://echo.htmlacademy.ru" method="post">
    <p>
      <label class="visually-hidden" for="login-login">Логин</label>
      <input class="login-icon-user" id="login-login" type="email" name="login" placeholder="email@example.com">
    </p>
    <p>
      <label class="visually-hidden" for="login-password">Пароль</label>
      <input class="login-icon-password" id="login-password" type="password" name="password" placeholder="••••••••">
    </p>
    <p class="login-help">
      <label class="login-checkbox">
        <input class="visually-hidden" type="checkbox" name="remember">
        <span class="checkbox-indicator"></span>
        Запомните меня
      </label>
      <a class="restore" href="#">Я забыл пароль!</a>
    </p>
    <button class="button" type="submit">Войти</button>
  </form>
  <button class="modal-close" type="button">Закрыть</button>
  <section class="modal modal-map">
    <h2 class="visually-hidden">Как до нас добраться</h2>
    </section>
  
</body>
</html>
