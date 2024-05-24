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
        <img class="course-logo" src="../images/cllge-CASS.png" alt="COLLEGE 0f Arts And Social Science">
        <h2 class="course-title" class="college-heading">COLLEGE OF ARTS AND SOCIAL SCIENCE</h2>
    </div>
    <div class="main-container">
        <video controls class="vid-container">
            <source class="vid" src="../images/artsandsocialscience.MOV" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="program-offers"> <strong style="font-size: 2.8rem;">PROGRAM OFFERS</strong><br><br>
                Bachelor Of Science In Accountancy<br>
                -Bachelor of Science in Accounting in Information System<br>
                (AACCUP Level 2 RE-Accredated)<br>
                Human Resource Management (HRM)<br>
                Marketing Management (MM)<br>
                Financial Management (FM)<br>
                -Bachelor of Science in Tourism Management<br>
                (AACCUP Level 3 RE-Accredated)<br>
                -Bachelor of Sciences in Entrepreneurship major in: <br>
                (AACCUP Level 3 RE-Accredated)<br>
                Enterprise Management<br>
                Agriculture Management<br>
                Whole Sale And Retail<br><br>
                <strong style="font-size: 2rem;">GOAL</strong><br><br>

                To produce graduates necessary for attaining the sustainable development goals of the province and the country.<br><br>
                <strong style="font-size: 2rem;">OBJECTIVES</strong><br><br>
                To offer curricular programs in the field of Arts and Sciences in response to the felt need of the immediate community, province, and the country.
                To develop and enhance the academic aptitude and skills of students in their fields of specialization.
                The School of Arts and Sciences or SAS, primarily aims to strengthen instruction in General Education (GE) subjects and to offer Arts and Sciences – related courses. After undergoing several changes over the years since its establishment in 1995, the present-day School of Arts and Sciences is now home to students specializing in three different fields.<br><br>

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
