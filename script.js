//  Stops the form from sending before everything is complete
$("form").submit(function(e) {
  e.preventDefault();

  var formError = "";

  if ($("#email").val() == "") {
    formError += ("The email field is required<br>");
  }

  if ($("#subject").val() == "") {
    formError += ("The subject field is required<br>");
  }

  if ($("#content").val() == "") {
    formError += ("<p>The content field is required");
  }

  if (formError != "") {
    $("#errorMessage").html('<div class="alert alert-danger warningMessage" role="alert"> <p id="warningHeading">There were error(s) in your form: </p>' + formError + '</div>');

  } else {
    // Allows the form to now be sent
    $("form").unbind("submit").submit();
  }

});