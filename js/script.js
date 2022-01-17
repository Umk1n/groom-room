function ready(f) {
  /in/.test(document.readyState) ? setTimeout('ready(' + f + ')', 9) : f();
}
ready(function() {
  var container = new Vue({
    el: '#container',
    data() {
      return {
        placeholderName: 'Введите кличку',
        placeholderService: 'Введите услугу',
        valueInputName: '',
        valueInputService: '',
        placeholderEmail: 'Введите email',
        placeholderPassword: 'Введите пароль',
        valueEmail: '',
        valuePassword: '',
        default: 'В процессе', 
        services: [{
          url: 'img/pet/onecat.jpg',
          name: 'OnePunch Cat',
          condition: 'Выполнена',
          service: 'Приукрасить'
        },
        { 
          url: 'img/pet/catsay.jpg',
          name: 'SailorMoon Cat',
          condition: 'Выполнена',
          service: 'Приукрасить'
        },
        { 
          url: 'img/pet/lenicat.jpg',
          name: 'Leni Cat',
          condition: 'Выполнена',
          service: 'Приукрасить',
        },
        {
          url: 'img/pet/coolcat.jpg',
          name: 'Cool Cat',
          condition: 'Выполнена',
          service: 'Приукрасить'
        },
        {
          url: 'img/pet/cat.jpg',
          name: 'Pupsich Cat',
          condition: 'Выполнена',
          service: 'Приукрасить'
        }
      ],
      }
    },
    methods: {
      inputName(event){
        this.valueInputName = event.target.value;
      },
      inputService(event){
        this.valueInputService = event.target.value;
      },
      applicationForm(){
        if(this.valueInputName === '' && this.valueInputService === '') {
          return
        };
        this.services.push({
          name: this.valueInputName,
          service: this.valueInputService,
          condition: this.default
        });
        this.valueInputName = '';
        this.valueInputService = '';
      },
      inputEmail(event){
        this.valueEmail = event.target.value;
      },
      inputPassword(event){
        this.valuePassword = event.target.value;
      },
      consoleData(){
        console.log(`email: ${this.valueEmail} password: ${this.valuePassword}`);
        this.valueEmail = '';
        this.valuePassword = '';
      }

    }
  })
});