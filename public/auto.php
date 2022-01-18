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
    <?include 'header.php'; ?>
    <content class="content">
      <div class="application">
        <div class="application__left">
          <h2 class="application__left-title">Войдите или зарегистрируйтесь<br><span class="application__left-title-grey">Чтобы получить возможность добавить заявку</span></h2> 
        </div>
        <div class="application__right">
          <img src="public/img/pet/pets.png" class="application__right-pets" alt="">
          <form action="" class="application__right-form">
            <div class="application__form-nav">
              <div class="application__form-nav-item active-auto">Войти</div>
              <div class="application__form-nav-item">Регистрация</div>
            </div>
            <input type="email" class="application__form-input" v-bind:value="valueEmail" v-on:input="inputEmail" :placeholder="placeholderEmail">
            <input type="password" class="application__form-input" v-bind:value="valuePassword" v-on:input="inputPassword" :placeholder="placeholderPassword">
            <button class="application__form-btn" type="button" v-on:click="consoleData">Войти</button>
          </form>
        </div>
      </div>
    </content>
    <?include 'footer.php'; ?>
  </div>

  <script src="public/js/vue.min.js"></script>
  <script src="public/js/script.js"></script>
</body>
</html>