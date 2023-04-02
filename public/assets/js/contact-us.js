$("#contact-us").on("submit", function (event) {
  event.preventDefault();

  var $this = $(this);
  var buttonText = $this.find("button:submit").text();

  $this.find("button:submit").attr("disabled", true);
  $this.find("button:submit").html("Loading ...");

  _token = $("meta[name='csrf-token']").attr("content");

  var formData = new FormData();
  const form_names = ["name", "email", "message", "_token"];

  form_names.forEach((name) => {
    formData.append(name, $("[name='" + name + "']").val());
  });

  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    url: $("meta[name='BASE_URL']").attr("content") + "/contact",
    data: formData,
    dataType: "json",
    cache: false,
    contentType: false,
    processData: false,
    type: "POST",
    success: function (response) {
      $("#register_user").trigger("reset");

      swal({
        title: "تمت العملية بنجاح",
        text: response.message,
        type: "success",
        icon: "success",
        buttons: false,
      });

      window.location = $("meta[name='BASE_URL']").attr("content") + "/";
    },
    error: function (response) {
      http.fail(response.responseJSON, true);
    },
  }).always(function () {
    $this.find("button:submit").attr("disabled", false);
    $this.find("button:submit").html(buttonText);
  });
});
