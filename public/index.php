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
          <h2 class="application__left-title">Профессиональная укладка<br> для ваших домашних <br> питомцев</h2> 
        </div>
        <div class="application__right">
          <form action="" class="application__right-form">
            <p class="application__form-title">Создайте заявку</p>
            <input type="text" class="application__form-input" v-bind:value="valueInputName" v-on:input="inputName" v-on:keypress.enter="applicationForm" :placeholder="placeholderName">
            <input type="text" class="application__form-input" v-bind:value="valueInputService" v-on:input="inputService" v-on:keypress.enter="applicationForm" :placeholder="placeholderService">
            <button class="application__form-btn" type="button" v-on:click="applicationForm">Записаться</button>
          </form>
        </div>
      </div>
      <div class="store">
        <h3 class="store__title">Наши работы</h3>
        <div class="store__row">
          <div class="store__row-card" v-for="myServices in services">
            <img :src="myServices.url" alt="" class="card-image">
            <div class="card-title">{{myServices.name}}</div>
            <select>
              <option><div class="card-category">Название услуги: <b>{{myServices.service}}</b></div></option>
            </select>
            <div class="card-status">{{myServices.condition}}</div>
          </div>
        </div>
      </div>
    </content>
    <?include 'footer.php'; ?>
  </div>

  <script src="public/js/vue.min.js"></script>
  <script src="public/js/script.js"></script>
</body>
</html>