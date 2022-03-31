<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="myStyles.css">
  <title>Jessica Lindsey</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top ">
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
            <a class="nav-link active" aria-current="page" href="form.php">CONTACT</a>
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

    <div class="header myHeader clearfix">
      <img src="JessWriterHeadshot.jpg" alt="Jessica Lindsey Portrait" style="height:225px">
      <h1>Jessica Lindsey</h1>
      <hr>
      <h2>Web Developer</h2>
    </div>

  </header>
  <div class="myDiv shadow">
    <h3 id="aboutMe">About Me</h3>
  </div>
  <div class="bodyDiv">
  <?php
  
  // echo "<h3>My Skills Include:</h3></ul>";

  $mySkills = array("PHP, SQL, JavaScript, HTML, and CSS experience", "Soft skills", "Extensive experience writing documentation", 
  "Microsoft Office and Adobe Suite");
  // function newList($array) {
   
  // echo "<ul>";
  // foreach ($array as $arrayItem) {
  //     echo "<li>" . $arrayItem . "</li>";
  // }

  // echo "</ul>";
  
  // }

  // newList($mySkills);

  $myHobbies = array('Traveling', 'Reading', 'Writing Poetry', 'Painting', 'Attending Plays and Museums');

  // echo "<h4>My Skills Include (foreach loop):</h4>";
  // echo "<ul>";
  // foreach ($mySkills as $skill) {
  //     echo "<li>" . $skill . "</li>";
  // }
  // echo "</ul>";
  
  function newList($array) {
      echo "<ul>";
      foreach ($array as $arrayItem) {
          echo "<li>" . $arrayItem . "</li>";
      }
      echo "</ul>";
  }

  echo "<h4>My Skills Include:</h4>";
  newList($mySkills);

  echo "<h4>My Hobbies Include:</h4>";
  newList($myHobbies);

  ?>
  <!-- </div>
  <div class="bodyDiv">
    <table>
      <tr>
        <th>Passions</th>
        <th>Abilties</th>
        <th>Strengths</th>
      </tr>
      <tr>
        <td>Traveling the world</td>
        <td>HTML, CSS, JavaScript</td>
        <td>Emotional intelligence</td>
      </tr>
      <tr>
        <td>Writing poetry</td>
        <td>Technical writing</td>
        <td>Highly motivated</td>
      </tr>
      <tr>
        <td>Spending time with family</td>
        <td>Soft skills</td>
        <td>Fast learner</td>
      </tr>
    </table>
  </div> -->
  <!-- <footer style='text-align: center'>
    <div class='myDiv shadow'>
      <h6>Copyright 2021</h6>
    </div>
  </footer> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>