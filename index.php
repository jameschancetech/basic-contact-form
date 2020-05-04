<?php include("send-email.php"); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Contact Form | Complete Web Developer</title>  
</head>
<body>

  <div class="container">
    <div class="wrapper">
      <div id="errorMessage" class="alert-danger text-danger"><?php echo $error; ?></div>
      <div id="successMessage" class="alert-success"><?php echo $successMessage; ?></div>
      <h1>Contact Me!</h1>
      <form method="POST">
        <div class="form-group">
          <label for="email" class="d-block">Email Address</label>
          <input type="email" name="email" id="email" class="d-block width100 form-control form-control-lg" placeholder="Enter Email">
          <p class="d-block" id="emailMessage">We'll never share your email with anyone else</p>
        </div>
        <div class="form-group">
          <label for="subject" class="d-block">Subject</label>
          <input type="text" name="subject" id="subject" class="d-block width100 form-control form-control-lg">
        </div>
        <div class="form-group">
          <label for="content" class="d-block">What would you like to ask?</label>
          <textarea name="content" id="content" cols="30" rows="10" class="d-block width100 form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg form-control" id="submit">Submit</button>
      </form>
    </div>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>