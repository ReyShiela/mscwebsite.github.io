<?php
$isLoggedIn = $_GET['loggedIn'] ?? '';
$username = $_GET['username'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>College of Business and Accountancy</title>
    <link rel="stylesheet" type="text/css" href="../css/courses.css">
</head>
<body>
    <nav class="navigation-bar">
        <div class="navigation-bar-logo">
            <img class="logo" src="../images/logomsc.png">
            <h1 class="nav-title">Marinduque State College</h1>
        </div>
        <ul class="nav-links">
            <li><?php
            echo "<a href='../index.php?loggedIn={$isLoggedIn}&username={$username}'>Home</a>";
            ?></li>
            <li><a href="webpages/campusmap.php">Campus Map</a></li>
            <li><a href="webpages/aboutus.php">About Us</a></li>
        </ul>
    </nav>

    <div class="course-div">
        <img class="course-logo" src="../images/cllge-of-engineering.png" alt="COLLEGE 0f Arts And Social Science">
        <h2 class="course-title">COLLEGE OF ENGINEERING</h2>
    </div>

    <div class="main-container">
        <video controls class="vid-container">
            <source class="vid" src="../images/engineering.MOV" type="video/mp4">
            Your browser does not support the video tag.
        </video> 
            <p class="program-offers"> <strong style="font-size: 2.8rem;"> PROGRAM OFFERS</strong><br><br>
            Bachelor of Science in Civil Engineering (BSCE) (AACCUP Level III Re-accredited)<br>
            Bachelor of Science in Electrical Engineering (BSEE) (AACCUP Level III Re-accredited)<br>
            Bachelor of Science in Electronics Engineering (BSECE) (AACCUP Level III Re-accredited)<br>
            Bachelor of Science in Computer Engineering (BSCPE) (AACCUP Level III Re-accredited)<br>
            Bachelor of Science in Mechanical Engineering (BSME) (AACCUP Level II Re-accredited)<br><br>
            The School of Engineering started its operations in Academic Year (AY) 1986 – 1987 with 40 enrollees to the Bachelor of Science in Civil Engineering. MSC was then known as Marinduque School of Arts and Trades. Upon its conversion into Marinduque Institute of Science and Technology through RA 377 in 1998, a ladderized Civil Engineering curriculum was offered with 44 first graduates by March 2003. Simultaneously, a ladderized curriculum for the BS in Electrical Engineering was also offered. In a ladderized curriculum, a student may opt to graduate under the three-year Associate program in Civil Engineering or Electrical Engineering. This ladderized curriculum was enhanced sometime in 2008 to contain additional skills subjects thus enabling students to opt to graduate with a either Diploma in a one-year Building Electrician Course, or a Diploma in a two-year Industrial Electrician course or a Diploma in a three-year Automation Technician course. Similarly, students can also choose a two-year Computer Technician course, or a three-year Electronics Technician course.<br>
        </p>
    </div>
    <div class="feedback-container"> 
        <form action="MAILTO:mandalihanprinces1@gmail.com" class="feedback" method="post">
            <p>Feedback</p>
            <input type="text" maxlength="500">
            <button type="submit">Send Feedback</button>
        </form>
    </div>
</body>
</html>
