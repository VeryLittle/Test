let vm = new Vue({
    el: '#contactForm',
    data: {
        errors: [],
        name: null,
        js_input: 'js_input',
        f_name: null,
        email: null,
        message: null,
        response: null
    },
    methods: {
        checkForm: function (e) {
            e.preventDefault();
            this.errors = [];
      
            if (!this.f_name) {
              this.errors.push('Укажите имя.');
            }
            if (!this.email) {
              this.errors.push('Укажите электронную почту.');
            } else if (!this.validEmail(this.email)) {
              this.errors.push('Укажите корректный адрес электронной почты.');
            }
            if (!this.message) {
                this.errors.push('Заполните текст обращения.');
            }
            
            if (!this.errors.length) {
              $.ajax({
                type: $(this.$options.el).attr('method'),
                url: $(this.$options.el).attr('action'),
                data: {
                  name: this.name,
                  js_input: this.js_input,
                  f_name: this.f_name,
                  email: this.email,
                  message: this.message
                },
                success: function(data){
                  if(data) {
                    $('#form_container').hide();
                    $('#thanks').text('Спасибо, ' + vm.f_name);
                    $('#thanks').show();
                  }
                  else {
                    vm.response = 'Ошибка при отправке заявки.';
                  }
                }
              });
            }
            
        },
        validEmail: function (email) {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
        }
    }
});

$(document).ready(function(){

});
