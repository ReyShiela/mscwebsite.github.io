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
        <img class="course-logo" src="../images/cllge-of-education.png" alt="COLLEGE 0f Arts And Social Science">
        <h2 class="course-title">COLLEGE OF EDUCATION</h2>
    </div>

    <div class="main-container">
        <video class="vid-container" controls>
            <source class="vid" src="../images/educ.MOV" type="video/mp4">
            Your browser does not support the video tag.
        </video>

            <p class="program-offers"> <strong style="font-size: 2.8rem;">PROGRAM OFFERS</strong><br><br>
            Bachelor of Secondary Education (BSEd)<br>
            Bachelor of Culture and Arts Education (BCAED)<br>
            Bachelor of Technology and Livelihood Education (BTLEd)<br>
            Bachelor of Elementary Education (BEEd)<br><br>
            The founding of Marinduque School of Arts and Trades (MSAT) opened the way to produce educated Marinduqueños. The school was then mandated to offer Vocational Secondary Curriculum and Two-Year Technical Program.<br>
            The Marinduque State College School of Secondary Teacher Education (MSC-SSTEd) started in 1976 previously called Professional Industrial Education Department (PIED) with the course offering Bachelor of Science in Industrial Education (BSIE).<br>
            The unprecedented performance of the School of Education now called School of Secondary Teacher Education pave the way to reach its current status as the school having the program with the highest accreditation status granted by the Accrediting Agency of Chartered Colleges and Universities in the Philippines (AACCUP), Inc.<br><br>
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
