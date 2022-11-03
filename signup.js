$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        txtUsername: $("#txtUsername").val(),
        txtPasswd: $("#txtPasswd").val(),
        txtRePasswd: $("#txtRePasswd").val(),
      };
  console.log(formData)
      $.ajax({
        type: "POST",
        url: "signup.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
        if(data === true)
        {
            console.log("data");
            var url = "https://localhost/contact/login.html";
            $(location).attr('href',url);
        }
      });
  
      event.preventDefault();
    });
  });