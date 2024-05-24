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
        <img class="course-logo" src="../images/cllge-cahs.png" alt="COLLEGE 0f Allied and Health sciences">
        <h2 class="course-title">COLLEGE OF ALLIED AND HEALTH SCIENCE</h2>
    </div>
    <div class="main-container">
        <video controls class="vid-container">
            <source src="../images/cahs.MOV" class="vid" type="video/mp4">
            <!-- Add additional source elements if needed for different video formats -->
            Your browser does not support the video tag.
        </video> 
            <p class="program-offers"> <strong style="font-size: 2.8rem;">PROGRAM OFFERS</strong><br><br>
            Bachelor of Science in Nursing <br>
            (AACCUP Level II Re-accredited) <br>
            Midwifery Program (Member: APSOM)<br><br>
            MSC’s School of Allied Medicine evolved from Marinduque Community College in Pag-asa, Sta. Cruz, Marinduque was initiated by then Mayor Percival Morales to provide educational opportunities for the youth on a higher level. After former Director of the then Bureau of Higher Education, Dr. Nilo Rosas suggested the offering of vocational courses, the Diploma in Midwifery at MSC was born in AY 1989-1990 and was known as the School of Midwifery, headed by its first principal, Mrs. Lorna B. Cordero under the supervision of the MCC Administrator, Mr. Saturnino B. Rogelio. In 1992, MCC eventually became a branch of Marinduque State College by virtue of RA 7319 authored by then Congresswoman Carmencita O. Reyes and signed by Pres. Corazon C. Aquino.

            During the incumbency of MSC President Dr. Rodrigo M. Monterey, the MSC School of Midwifery was transferred from Pag-asa to Matalaba and was renamed School of Allied Medicine. It was in the same year (1995) when MSC’s Board of Trustees thru BOT Res. No. 8 s. 1995 approved the opening of a one-year health aide program as an initial offering under the ladderized Progressive Health Curriculum.<br><br>
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
