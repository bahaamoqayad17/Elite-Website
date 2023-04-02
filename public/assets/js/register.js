$("#register-user").on("submit", function (event) {
  event.preventDefault();

  if (!$("[name='accept_privacy_policy']").prop("checked") == true) {
    alert("يرجى الموافقة على سياسة الخصوصية");
    return;
  }

  var $this = $(this);
  var buttonText = $this.find("button:submit").text();

  $this.find("button:submit").attr("disabled", true);
  $this.find("button:submit").html("Loading ...");

  _token = $("meta[name='csrf-token']").attr("content");
  var file = $("input[name='image']")[0].files[0];
  var selfi = $("input[name='selfi']")[0].files[0];

  var formData = new FormData();
  const form_names = [
    "first_name",
    "father_name",
    "grandfather_name",
    "last_name",
    "first_name_en",
    "last_name_en",
    "national_id",
    "email",
    "mobile_no",
    "password",
    "confirm_password",
    "gender",
    "birthdate",
    "_token",
  ];

  form_names.forEach((name) => {
    formData.append(name, $("[name='" + name + "']").val());
  });
  formData.append("image", file);
  formData.append("selfi", selfi);

  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    url: $("meta[name='BASE_URL']").attr("content") + "/register",
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

      window.location = $("meta[name='BASE_URL']").attr("content") + "/login";
    },
    error: function (response) {
      http.fail(response.responseJSON, true);
    },
  }).always(function () {
    $this.find("button:submit").attr("disabled", false);
    $this.find("button:submit").html(buttonText);
  });
});
