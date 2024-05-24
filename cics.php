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
        <img class="course-logo" src="../images/cllge-cics.png" alt="COLLEGE 0f Arts And Social Science">
        <h2 class="course-title">COLLEGE OF INFORMATION AND COMPUTING SCIENCES</h2>
    </div>
    <div class="main-container">
        <video class="vid-container" controls>
            <source class="vid" src="../images/it.MOV" type="video/mp4">
            Your browser does not support the video tag.
        </video> 
        <p class="program-offers"> <strong style="font-size: 2.8rem;"> PROGRAM OFFERS</strong><br><br>
            Bachelor of Science in Information Technology<br>
            (Level III AACCUP Re-accredited)<br>
            Bachelor of Science in Information System<br>
            (Boac Campus: Level III AACCUP Re-accredited, Sta Cruz Branch: Level II AACCUP Re-accredited)<br><br>
            The School was first established in 1998 at MSC Boac Campus through BOT Resolution No. 35. S. 1998 as the Institute of Information and Computing Sciences (IICS), a special program to offer Associate degrees in Computer Technology (ACT). Believing that the province needs IT human resources, IICS was adopted as the School of Information and Computing Sciences (SICS), after two years, offering two emerging degree courses: Bachelor of Science in Information Management and Bachelor of Science in Information Technology to cater to the graduates of ACT. The Bachelor of Science in Information Management (BSIM) was also offered at MSC’s Sta. Cruz campus, while the Bachelor of Science in Information Management was renamed Bachelor of Science in Information Systems (BSIS) in compliance with CHED Memorandum Order No. 53 series of 2006.<br><br>
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
