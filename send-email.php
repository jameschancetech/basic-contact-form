<?php 
  $error = "";
  $successMessage = "";

  if ($_POST) {

    if (!$_POST["email"]) {
      $error .= "An email address is required<br>";
    }
    if (!$_POST["subject"]) {
      $error .= "A subject is required<br>";
    }
    if (!$_POST["content"]) {
      $error .= "A message is required<br>";
    }
    if ($_POST["email"] && filter_var($$_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $error .= "The email address is invalid<br>";
    }
    if ($error != "") {
      $error = '<div class="alert alert-danger warningMessage" role="alert"> <p id="warningHeading">There were error(s) in your form: </p>' . $error . '</div>';
    } else {

      $emailTo = "jameschance1010@gmail.com";
      $subject = $_POST["subject"];
      $body = $_POST["content"];
      $headers = "From:" . $_POST["email"];

      if (mail($emailTo, $subject, $body, $headers)) {
        $successMessage = '<div class="alert alert-success" role="alert"> <p id="warningHeading">Your message has been sent, we\'ll get back to you ASAP!</p></div>';
      } else {
        $error = '<div class="alert alert-danger" role="alert"> <p id="warningHeading">Your message couldn\'t be sent, please try again later</p></div>';
      }
    }
  }
?>