<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

    <!-- Website Title -->
    <title>Create a PHP Form Filtering Solution</title>

  </head>

  <body>
    <?php
  $nameErr = $emailErr = $contBackErr = "";
  $name = $email = $contBack = $comment = "";
  $formErr = false;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
      $nameErr = "Name is required.";
      $formErr = true;
    } else {
      $name = cleanInput($_POST["name"]);
      //Use REGEX to accept only letters and white spaces
      if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = "Only letters and standard spaces allowed.";
        $formErr = true;
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required.";
      $formErr = true;
    } else {
      $email = cleanInput($_POST["email"]);
      // Check if e-mail address is formatted correctly
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Please enter a valid email address.";
        $formErr = true;
      }
    }

    if (empty($_POST["contact-back"])) {
      $contBackErr = "Please let us know if we can contact you back.";
      $formErr = true;
    } else {
      $contBack = cleanInput($_POST["contact-back"]);
    }

    $comment = cleanInput($_POST["comments"]);
  }

  function cleanInput($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

    <!-- Contact Form Section -->
    <section id="contact">
      <div class="container py-5">
        <!-- Section Title -->
        <div class="row justify-content-center text-center">
          <div class="col-md-6">
            <h2 class="display-4 font-weight-bold">Contact Me</h2>
            <hr />
          </div>
        </div>
        <!-- Contact Form Row -->
        <div class="row justify-content-center">
          <div class="col-6">

            <!-- Contact Form Start -->
            <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" novalidate>

              <!-- Name Field -->
              <div class="form-group">
                <label for="name">Full Name:</label>
                <span class="text-danger">*<?php echo $nameErr; ?></span>
                <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" />

              </div>

              <!-- Email Field -->
              <div class="form-group">
                <label for="email">Email address:</label>
                <span class="text-danger">*<?php echo $emailErr; ?></span>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" />
              </div>

              <!-- Radio Button Field -->
              <div class="form-group">
                <label class="control-label">Can we contact you back?</label>
                <span class="text-danger">*<?php echo $contBackErr; ?></span>
                <div class="form-check">
                  <input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes" />
                  <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" name="contact-back" id="no" value="No" />
                  <label class="form-check-label" for="no">No</label>
                </div>
              </div>

              <!-- Comments Field -->
              <div class="form-group">
                <label for="comments">Comments:</label>
                <textarea id="comments" class="form-control" rows="3" name="comments"></textarea>
              </div>

              <!-- Required Fields Note-->
              <div class="text-danger text-right">* Indicates required fields</div>

              <!-- Submit Button -->
              <button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
            </form>

          </div>
        </div>
      </div>
    </section>

    <?php if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))) { ?>

    <section id="results" style="background-color: lightsteelblue;">
      <div class="container py-2">
        <div class="row ">
          <h1>Form Entries:</h1>
        </div>
        <div class="row">
          <ul>
            <?php
            if ($name !== "") {
              echo "<li>NAME: $name </li>";
            }
            if ($email !== "") {
              echo "<li>EMAIL: $email </li>";
            }
            if ($contBack !== "") {
              echo "<li>CONTACT BACK: $contBack </li>";
            }
            if ($comment !== "") {
              echo "<li>COMMENT: $comment </li>";
            }
            ?>
          </ul>
        </div>
      </div>
    </section>

    <?php } ?>
  </body>

</html>
<!-- <!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>


    <title>Form</title>
  </head>

  <body>
    <?php
  $name = $email = $contactBack = $comment = '';
  $nameErr = $emailErr = $contactBackErr = '';
  $formErr = false;

  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactBack = $_POST['contactBack'];
    $comment = $_POST['comment'];
  }
  ?>
    <!-- In css, we use # for ids, and . for classes -->
    <section id="contact">
      <div class="container py-5">
        <div class="row justify-content-center text-center">
          <div class="col-md-6">
            <h2 class="display-4 font-weight-bold">Contact Me</h2>
            <hr>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-6">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
              <div class="form-group">
                <label for="name">Full Name: </label>
                <input type="text" class="form-control" id="name" placeholder="Full Name" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email address: </label>
                <input type="email" class="form-control" id="email" placeholder="name@email.com" name="email">
              </div>
              <div class="form-group">
                <label for="control-label">Can we contact you?</label>
                <div class="form-check">
                  <input type="radio" class="form-control-check-input" id="yes" name="contactBack" value="Yes" checked>
                  <label for="yes" class="form-check-label">Yes</label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-control-check-input" id="no" name="contactBack" value="No">
                  <label for="no" class="form-check-label">No</label>
                </div>
              </div>
              <div class="form-group">
                <label for="comment">Comments:</label>
                <textarea name="comment" id="comment" rows="4" class="form-control"></textarea>
              </div>
              <button class="btn btn-success mb-2" type="submit" role="button" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
    <section id="results" style="background-color: #7BF1A8;">
      <div class="container py-2">
        <div class="row">
          <h1>Form Entries:</h1>
        </div>
        <div class="row">
          <ul>
            <?php
            if ($name !== '') {
              echo "<li>Name: $name </li>";
            }
            if ($email !== '') {
              echo "<li>Email: $email </li>";
            }
            if ($contactBack !== '') {
              echo "<li>Contact Back: $contactBack </li>";
            }
            if ($comment !== '') {
              echo "<li>Comment: $comment </li>";
            }
            ?>
          </ul>
        </div>
      </div>
    </section>
    <?php } ?>
  </body>

</html> -->