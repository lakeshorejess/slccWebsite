<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="myStyles.css">


</head>

<body>
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="JessicaLindseyResume.docx" download>RESUME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              CODING SAMPLES
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="nav-link active" aria-current="page" href="https://lakeshorejess.github.io/pacman/"
                  target="_blank">Pac-Man</a>
              </li>
              <li>
                <a class="nav-link active" aria-current="page" href="https://lakeshorejess.github.io/bouncingballs/"
                  target="_blank">Bouncing
                  Balls</a>
              </li>
              <li>
                <a class="nav-link active" aria-current="page" href="https://github.com/lakeshorejess/Games"
                  target="_blank">JavaScript Games</a>
              </li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <header>

    <div class="header myHeader clearfix shadow">
      <img src="JessWriterHeadshot.jpg" alt="Jessica Lindsey Portrait" style="height:225px">
      <h1>Jessica Lindsey</h1>
      <hr>
      <h2>Web Developer</h2>

    </div>

  </header>
  <div class="myDiv shadow">
    <h3 id="contactMe">Contact Me</h3>
  </div>
  <div class="bodyDiv">
    <!-- action="http://form-test.slccwebdev.com/form-success.php" 
    <form method="post" target="_blank" name="myForm" onsubmit="return(validate());">
      <div>
        <label>Name:</label>
        <input type="text" name="name" />
      </div>
      <br />
      <div>
        <label>Phone Number:</label>
        <input type="tel" name="phone" />
      </div>
      <br />
      <div>
        <label>Mobile Number:</label>
        <input type="tel" name="mobile" />
      </div>
      <br />
      <div>
        <label>Email:</label>
        <input type="email" name="email" />
      </div>
      <br />
      <div><label for="comments">Comments:</label><br />
        <textarea name="comments" id="comments" maxlength="250">Type your comments here.</textarea><br />
        <br />
      </div>
      <div>
        <p>Can I contact you?</p>
        <input type="radio" name="contact-back" id="yes" value="Yes" />
        <label for="yes">Yes</label>
        <input type="radio" name="contact-back" id="no" value="No" />
        <label for="no">No</label>
      </div>
      <br />
      <div>
        <p>Best Contact Methods:</p>
        <input type="checkbox" id="contactphone" name="contact-phone" value="Phone" />
        <label for="contactphone">Phone</label>
        <input type="checkbox" id="contacttext" name="contact-text" value="Text" />
        <label for="contacttext">Text</label>
        <input type="checkbox" id="contactemail" name="contact-email" value="Email" />
        <label for="contactemail"> Email </label><br /><br />
        <button type="submit" class="btn btn-secondary btn-lg">Submit</button>
      </div>
    </form>
  </div>
  <div class="myDiv shadow">
    <h3 id="referencesHeader">References</h3>
  </div>
  <br> -->
  <!-- form for PHP -->
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
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) { // regular expressions or "regex"
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
				$contBackErr = "Please let us know if we can contact.";
				$formErr = true;
			} else {
				$contBack = cleanInput($_POST["contact-back"]);
			}
			
			$comment = cleanInput($_POST["comments"]);
		}

		function cleanInput($data) {
			$data = trim($data); // " asdf    " => "asdf"
			$data = stripslashes($data); // "\asdf" => "asdf" // SQL security
			$data = htmlspecialchars($data); // "<script>" => "&lt;script&gt;", but displays in HTML as "<script>"
			return $data;
		}
	?>

	<!-- Contact Form Section -->
	<section id="contact">
		<div class="container py-5">
			<!-- Section Title -->
		<!-- <div class="row justify-content-center text-center">
				<div class="col-md-6">
					<h2 class="display-4 font-weight-bold">Contact Me</h2>
					<hr />
				</div>
			</div> -->
			<!-- Contact Form Row -->
			<div class="row justify-content-center">
				<div class="col-6">
				
					<!-- Contact Form Start -->
					<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" novalidate>
						
						<!-- Name Field -->
						<div class="form-group">
							<label for="name">Full Name:</label>
							<span class="text-danger">*<?php echo $nameErr; ?></span>
							<input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="<?php if(isset($name)) {echo $name;}?>" />
							
						</div>
						
						<!-- Email Field -->
						<div class="form-group">
							<label for="email">Email address:</label>
							<span class="text-danger">*<?php echo $emailErr; ?></span>
							<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php if(isset($email)) {echo $email;} ?>" />
						</div>
						
						<!-- Radio Button Field -->
						<div class="form-group">
							<label class="control-label">Can I contact you?</label>
							<span class="text-danger">*<?php echo $contBackErr; ?></span>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes" checked <?php if ((isset($contBack)) && ($contBack == "Yes")) {echo "checked";}?>/>
								<label class="form-check-label" for="yes" >Yes</label>
							</div>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="no" value="No" <?php if ((isset($contBack)) && ($contBack == "No")) {echo "checked";}?>/>
								<label class="form-check-label" for="no" >No</label>
							</div>
						</div>
						
						<!-- Comments Field -->
						<div class="form-group">
							<label for="comments">Comments:</label>
							<textarea id="comments" class="form-control" rows="3" name="comments"><?php if (isset($comment)) {echo $comment;} ?></textarea>
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
		<div class="container py-2" >
			<div class="row ">
				<h1>Form Entries:</h1>
			</div>
			<div class="row">				
				<ul>
					<?php
					if ($name !== "") { echo "<li>NAME: $name </li>"; } 
					if ($email !== "") { echo "<li>EMAIL: $email </li>"; }
					if ($contBack !== "") { echo "<li>CONTACT BACK: $contBack </li>"; }
					if ($comment !== "") { echo "<li>COMMENT: $comment </li>"; }
					?>
				</ul>		
			</div>
		</div>
	</section>
	
	<?php } ?>
  </div>
  <!-- <h4>Below are my references:</h4> -->
  <div class="myDiv shadow">
    <h3 id="referencesSection">References</h3>
  </div>
  <div class="bodyDiv">
    <!-- <p id="references"></p> -->

    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Relation</th>
        </tr>
      </thead>
      <tbody id="tbReferences"></tbody>
    </table>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="">First, Last, and Relation</span>
      </div>
      <input type="text" id="refFirstName" class="form-control">
      <input type="text" id="refLastName" class="form-control">
      <input type="text" id="refRelation" class="form-control">
    </div>
    <input class="btn btn-secondary btn-lg" id="refSubmit" onclick="addToRefs()" type="submit" value="Submit">
    <br>
  </div>

  <footer style='text-align: center'>
    <div class='myDiv shadow'>
      <h6>Copyright 2021</h6>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="scriptsContact.js"></script>

</body>

</html>