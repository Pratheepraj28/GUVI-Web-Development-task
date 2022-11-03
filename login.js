$(document).ready(function () {
    console.log(localStorage.getItem("username"))
    $("form").submit(function (event) {
      var formData = {
        txtUsername: $("#txtUsername").val(),
        txtPasswd: $("#txtPasswd").val(),
      };
  console.log(formData)
      $.ajax({
        type: "POST",
        url: "login.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
        if(data)
        {
            console.log("data",data[0]);
            localStorage.setItem("username",data[0])
            localStorage.setItem("password",data[1])
            localStorage.setItem("id",data[2])
            var url = "https://localhost/contact/profile.html";
            $(location).attr('href',url);
        }
      });
  
      event.preventDefault();
    });
  });