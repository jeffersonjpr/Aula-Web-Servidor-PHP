<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cv.css">
  <title>Curriculum Vitae</title>
</head>

<body>
  <div id="header"></div>
  <div class="left"></div>
  <div class="stuff">
    <br><br>
    <h1>Resume</h1>
    <h2>
      <?php
      include "variables.php";
      echo $name;
      ?>
    </h2>
    <hr />
    <br>
    <p><a href="hours.php">Hours</a></p>
    <br>
    <p class="head">Interests</p>
    <ul>
      <?php
      $interests = array("Gamming development", "Back-end", "Programming", "Compute science");
      sort($interests);
      for ($index = 0; $index < count($interests); $index++) {
        print("<li>$interests[$index]</li>");
      }
      ?>
    </ul>
    <p class="head">Skills</p>
    <ul>
      <?php
      $interests = array("<s>Web Design with HTML & CSS</s>", "Java", "Python", "C++", "C");
      sort($interests);
      for ($index = 0; $index < count($interests); $index++) {
        print("<li>$interests[$index]</li>");
      }
      ?>
    </ul>
    <p class="head">Education</p>
    <ul>
      <?php
      $interests = array("Tecnological University of Parana", "Udemy", "Codeacademy");
      sort($interests);
      for ($index = 0; $index < count($interests); $index++) {
        print("<li>$interests[$index]</li>");
      }
      ?>
    </ul>
    <p class="head">Experience</p>
    <ul>
      <?php
      $interests = array("Student Computer Science Intern for UTFPR", "Administration of fun provider equipment");
      sort($interests);
      for ($index = 0; $index < count($interests); $index++) {
        print("<li>$interests[$index]</li>");
      }
      ?>
    </ul>
    <p class="head">Extracurriculars</p>
    <ul>
      <?php
      $interests = array("Gamer Club", "Movie Club", "Book Club");
      sort($interests);
      for ($index = 0; $index < count($interests); $index++) {
        print("<li>$interests[$index]</li>");
      }
      ?>
    </ul>
  </div>
  <div class="right"></div>
  <div id="footer">
    <h2 id="name"><?php
                  include "variables.php";
                  echo $name;
                  ?></h2>
  </div>
</body>

</html>