$(document).ready(function () {
    var Id = localStorage.getItem("id");
    var username = localStorage.getItem("username");
    $('input[name="name"]').val(username);
    $("form").submit(function (event) {
        var date=$("#txtDOB").val();
      var formData = {
        id:Id,
        txtAge: $("#txtAge").val(),
        txtDOB: date,
        txtContact: $("#txtContact").val(),
      };
  console.log(formData)
      $.ajax({
        type: "POST",
        url: "profile.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
        if(data === true)
        {
            console.log("data");
            //var url = "https://localhost/contact/login.html";
            //$(location).attr('href',url);
        }
      });
  
      event.preventDefault();
    });
  });