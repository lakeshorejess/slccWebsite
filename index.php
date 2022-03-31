<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="myStyles.css">

    <title>Jessica Lindsey</title>
    <script src="myScripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="my_jquery_functions.js"></script>
    <script src="tests.js"></script>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top justify-content-center">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link active" aria-current="page" href="JessicaLindseyResume.docx"
                            download>RESUME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            CODING SAMPLES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> -->
                            <li>
                                <a class="nav-link active" aria-current="page"
                                    href="https://lakeshorejess.github.io/pacman/" target="_blank">Pac-Man</a>
                            </li>
                            <li>
                                <a class="nav-link active" aria-current="page"
                                    href="https://lakeshorejess.github.io/bouncingballs/" target="_blank">Bouncing
                                    Balls</a>
                            </li>
                            <li>
                                <a class="nav-link active" aria-current="page"
                                    href="https://github.com/lakeshorejess/Games" target="_blank">JavaScript Games</a>
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
    <!-- id="eduTitle" -->
    <!-- id= "education" -->
    <!-- onclick="educationTitle()" -->
    <div id="eduTitle" class="myDiv shadow" >
        <h3>Education <span class="arrow-down">&#9660;</span><span class="arrow-up" style="display: none;">&#9650;</span></h3>
    </div>
    <div id="eduBody" class="bodyDiv">
        <h5><a href="https://web.mit.edu/" target="_blank" >Massachusetts Institute of Technology</a><br />
            Full Stack Web Development Certificate</h5>
        <ul id="MITList">
            <li>Developed front end skills using HTML, CSS, and JavaScript.</li>
            <li>Cultivated an extensive portfolio of coding examples using proper etiquette and syntax.</li>
        </ul>
        <h5><a href="http://www.slcc.edu/" target="_blank">Salt Lake Community College</a> <br />
            Web Development Certificate</h5>
        <ul>
            <li>Reiterated skills in HTML, CSS, and JavaScript.</li>
            <li>Will learn skills in PHP and SQL.</li>
        </ul>
        <h5><a href="https://www.uvu.edu/" target="_blank">Utah Valley University</a> <br />
            Bachelor of Science in English</h5>
        <ul>
            <li>Awarded Dean&#8217s Merit English Department Scholarship.</li>
            <li>Awarded Distinguished Merit Scholarship.</li>
            <li>Cumulative GPA: 3.98</li>
        </ul>

    </div>
    <div id="proSkillsTitle" class="myDiv shadow">
        <h3 id="skills">Professional Skills <span class="arrow-down">&#9660;</span><span class="arrow-up" style="display: none;">&#9650;</span></h3>
    </div>
    <div id="proSkillsBody" class="bodyDiv">
        <ul>
            <li>Proficient in HTML, CSS, JavaScript, PHP, and WordPress.</li>
            <li>Creative, resourceful, adaptable, energetic, hardworking, fast learner.</li>
            <li>Extensive experience writing and maintaining documentation.</li>
        </ul>
    </div>

    <div id="empTitle" class="myDiv shadow">
        <h3 id="employment">Employment History <span class="arrow-down">&#9660;</span><span class="arrow-up" style="display: none;">&#9650;</span></h3>
    </div>
    <div id="empBody" class="bodyDiv">
        <h5><a href="http://lakeshoreartschool.com" target="_blank">Lakeshore School for the Arts and Technology</a>
            <br />Owner
        </h5>
        <ul>
            <li>Manage website and all technology needs for the school.</li>
            <li>Develop lesson plans and teach coding classes to children and teens.</li>
            <li>Write curriculum and create lesson plans for art and creative writing classes for children and
                adults.
            </li>
            <li>Establish marketing and branding practices and manage social media accounts.</li>
            <li>Manage employees and execute behind-the-scenes business operations including accounting and
                bookkeeping,
                hiring, and training.</li>
        </ul>
        <h5><a href="https://www.cityworks.com/" target="_blank">Cityworks</a> <br />
            Technical Writer</h5>
        <ul>
            <li>Produced engaging instructional tutorials for external and internal use utilizing Adobe Captivate,
                Photoshop and SnagIt. </li>
            <li>Collaborated with SMEs to created high-quality online help documentation and printed educational
                materials. </li>
            <li>Edited and proofread documentation for fellow technical writers.</li>
            <li>Worked with executives and management to determine best practices in documentation and marketing
                standards.</li>
        </ul>
        <h5><a href='https://www.jpmorganchase.com/' target="_blank">J.P. Morgan Chase</a><br />
            Technical Writer</h5>
        <ul>
            <li>Wrote scripts and produced video tutorials for customer-driven interfaces.</li>
            <li>Created high-quality documentation including user guides, quick reference cards, release notes and
                more
                following company style guides under tight deadlines.</li>
            <li>Provided feedback and technical recommendations to project sponsors and key stakeholders.</li>
        </ul>
    </div>
    <div class="bodyDiv">
    <?php

    echo "Thanks for visting my site. Hope you enjoyed it!";
    echo "<br/>";

    $greeting = "Have a nice day!";
    echo $greeting;

    echo "<br/>";

    $value1 = 7;
    $value2 = 11;
    $value3 = $value1 + $value2;
    $value4 = $value1 - $value2;
    $value5 = $value1 * $value2;

    echo $value1 . " + " . $value2 . " = " . ($value1 + $value2);
    echo "<br/>";
    echo $value1 . " - " . $value2 . " = " . $value4;
    echo "<br/>";
    echo $value1 . " x " . $value2 . " = " . $value5;
    echo "<br/>";

    for ($i = 1; $i < 5; $i++) {
        echo "Loop " . $i . "<br/>";
    }

    $names = array("June", "Sally", "Margaret");
    /* ?><ul><?php */
    echo "<ol>";
    foreach ($names as $name) {
        /* ?><li><?= $name ?></li><?php */
        /* ?><li><?php echo $name ?></li><?php */
        // echo "<li>{$name}</li>";
        echo "<li>" . $name . "</li>";
    }
    
    /* ?></ul><?php */
    echo "</ol><br/>";
    

    $mySkills = array("PHP, SQL, JavaScript, HTML, and CSS experience", "Soft skills", "Extensive experience writing documentation", 
    "Microsoft Office and Adobe Suite");

    $myHobbies = array('Traveling', 'Reading', 'Writing Poetry', 'Painting', 'Attending Plays and Museums');

    echo "<h4>My Skills Include (foreach loop):</h4>";
    echo "<ul>";
    foreach ($mySkills as $skill) {
        echo "<li>" . $skill . "</li>";
    }
    echo "</ul>";
    
    function newList($array) {
        echo "<ul>";
        foreach ($array as $arrayItem) {
            echo "<li>" . $arrayItem . "</li>";
        }
        echo "</ul>";
    }

    echo "<h4>My Skills Include (function):</h4>";
    newList($mySkills);

    echo "<h4>My Hobbies Include (function):</h4>";
    newList($myHobbies);

    ?>
    </div>
    <footer style='text-align: center'>
        <div class='myDiv'>
            <h6>Copyright 2021</h6>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>