$(document).ready(function() {
    $("#form-register").validate({//validation 
      rules: {
        username : {
          required: true,
        },
        email: {
            required: true,
            email: true
        },
        password:{
            required:true,
            minlength:6,
            maxlength:6,
        },
        date: {
          required: true,
        },
        age: {
            required: true,
            number: true,
        },
        phone: {
            required: true,
            minlength:10,
            maxlength:10,
          }
      },
      messages : {
        username: {
          required: "Enter ur name",
        },
        email: {
            required: "Enter the email",
          email: "In Format xyz@gmail.com",
        },
        password:{
            required:"please Provide a password",
            minlength:" only 6 char",
        },
        date: {
          required: "Please enter the d.o.b",
        },
        age: {
            required: "Please enter your age",
            number: "Age as a numerical value",
        },
        phone: {
            required: "Please enter the phone number",
            minlength:"Please specify a valid phone number",
            maxlength:"Please specify a valid phone number",
          }
      }
    }),
    submitForm=function(e){
      var username = $("input[name=username]").val();
      var email = $("input[name=email]").val();
      var password = $("input[name=password]").val();
      var formData = {
        username: username,
        email: email,
        password: password,
      };
      $.ajax({
        url: "http://localhost/GUVI/php/register.php",
        type: "POST",
        data: formData,
        success: function (response) {
          // if(response==1){
          //   alert("registered successfully");
          //   window.location="http://localhost/GUVI/login.html"
          // }
          
        },
      });
    }
    
});
        