<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <title>GROOMING</title>
</head>
<body>
  <div id="container">
    <header class="header">
      <div class="header__logo">
        <div class="header__logo-title">Grooming</div>
        <div class="header__logo-subtitle">Service for dogs and cats</div>
      </div>
      <nav class="header__nav">
        <a class="header__nav-item" href="/">Главная</a>
        <a class="header__nav-item active" href="auto">Заявки</a>
        <a class="header__nav-item" href="lk">Кабинет</a>
      </nav>
    </header>
    <content class="content">
      <div class="application">
        <div class="application__left">
          <h2 class="application__left-title">Мои заявки</h2>
          <div class="application__left-app">
            <div class="application__left-app-card">
            <img src="public/img/pet/cat.jpg" class="app-card-img" alt="">
              <div class="app-card-text-block">
                <h3 class="app">Заявка №1</h3>
                <p class="status">Информация о заявке</p>
              </div>
            </div>
            <div class="application__left-app-card">
            <img src="public/img/pet/cat.jpg" class="app-card-img" alt="">
              <div class="app-card-text-block">
                <h3 class="app">Заявка №1</h3>
                <p class="status">Информация о заявке</p>
              </div>
            </div>
            <div class="application__left-app-card">
              <img src="public/img/pet/cat.jpg" class="app-card-img" alt="">
              <div class="app-card-text-block">
                <h3 class="app">Заявка №1</h3>
                <p class="status">Информация о заявке</p>
              </div>
            </div>
          </div>
        </div>
        <div class="application__right">
          <form action="" class="application__right-form">
            <p class="application__form-title">Создайте заявку</p>
            <input type="text" class="application__form-input" placeholder="Текстовое поле">
            <input type="text" class="application__form-input" placeholder="Текстовое поле">
            <button class="application__form-btn" type="submit">Записаться</button>
          </form>
        </div>
      </div>
    </content>
    <footer class="footer">
      <div class="footer__title">groom-salon.com 2000-2999</div>
    </footer>
  </div>
</body>
</html>