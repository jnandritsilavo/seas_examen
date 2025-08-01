$(function() {
    $(".btn-login").click(function(event) {
      event.preventDefault();
      $.post(base_url + "inspection", $("form.card-login").serialize(), function(response) {
        switch (parseInt(response)) {
          case 1:
            window.location.replace(base_url + "home");
            break;
          case 2:
            $("small.login-box-msg").html("Ce compte n'est pas enregistré.");
            break;
          default:
            $(".login-box-msg").show();
            $("small.login-box-msg").html("Adresse e-mail ou mot de passe invalide.");
        }
      })
    });
    $("#check-pass").click(function() {
      var c = $("#formPassw").attr("type");
      if (c == "password") {
        $("#formPassw").attr("type", "text")
      } else {
        $("#formPassw").attr("type", "password")
      }
    })
  });

  $(function() {
    $(".btn-registration").click(function(event) {
      event.preventDefault();
      $.post(base_url + "registration/save-data", $("form.card-login").serialize())
        .done(function(response) {
          if (response === 'success') {
            window.location.replace(base_url + "home");
          } else {
            let errorObj = JSON.parse(response);
            $('#formFirstErrorBlock').html(errorObj.formFirst);
            $('#formNameErrorBlock').html(errorObj.formName);
            $('#formEmailErrorBlock').html(errorObj.formEmail);
            $('#formPasswErrorBlock').html(errorObj.formPassw);
            $('#formPasswConfirmErrorBlock').html(errorObj.formPasswConfirm);
          }
        })
        .fail(function() {
          console.log('Failed');
        });
    });

    $("#check-pass").click(function() {
      let inputType = $("#formPasswConfirm").attr("type");
      if (inputType === "password") {
        $("#formPasswConfirm").attr("type", "text");
      } else {
        $("#formPasswConfirm").attr("type", "password");
      }
    });
  });

  $(function() {
    $(".btn-password").click(function(event) {
      event.preventDefault();
      $.post(base_url + "validate-password", $("form.password-change").serialize())
        .done(function(response) {
          if (response === 'success') {
            window.location.replace(base_url + "forgot-passwor-successed");
          } else {
            let errorObj = JSON.parse(response);
            $('#formEmailErrorBlock').html(errorObj.formEmail);
          }
        })
        .fail(function() {
          console.log('Failed');
        });
    });

    $("#check-pass").click(function() {
      let inputType = $("#formPasswConfirm").attr("type");
      if (inputType === "password") {
        $("#formPasswConfirm").attr("type", "text");
      } else {
        $("#formPasswConfirm").attr("type", "password");
      }
    });
  });