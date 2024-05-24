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
        <img class="course-logo" src="../images/cllge-cab.png" alt="COLLEGE of BUSINESS AND ACCOUNTANCY">
        <h2 class="course-title">COLLEGE OF BUSINESS AND ACCOUNTANCY</h2>
    </div>
        <div class="main-container">
            <video controls class="vid-container">
                <source src="../images/businessadd.MOV" class="vid" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="program-offers"> <strong style="font-size: 2.8rem;">PROGRAM OFFERS</strong><br><br>
                Bachelor Of Science In Accountancy<br>
                Bachelor of Science in Accounting in Information System<br>
                (AACCUP Level 2 RE-Accredated)<br>
                Human Resource Management (HRM)<br>
                Marketing Management (MM)<br>
                Financial Management (FM)<br>
                Bachelor of Science in Tourism Management<br>
                (AACCUP Level 3 RE-Accredated)<br>
                Bachelor of Sciences in Entrepreneurship major in:<br>
                (AACCUP Level 3 RE-Accredated)<br>
                Enterprise Management<br>
                Agriculture Management<br>
                Whole Sale And Retail<br><br>
                August 15, 2011 through BOT Resolution No. 16 series of 2011 when the School of Business and Management (SBM) was created, adopting the BS Tourism Management Program from the former School of Tourism in MSC Pag-asa, Sta. Cruz Campus and BS Entrepreneurship Program major in Enterprise Management offered in Boac Campus, Wholesale & Retail in Sta. Cruz and Agribusiness in Torrijos Campus. The SBM started operating on the second semester of academic year 2011-2012 and was launched on November 2011 during the opening of classes. Effective 1st semester of AY 2012-2013, SBM Boac Campus started offering Bachelor in Public Administration program by virtue of BOT Resolution No. 47 series of 2011 with CHED IV-B order number 007 series of 2012. During the school year 2013-2014, SBM offered another new program at Pag-asa, Sta. Cruz Campus, BS Accounting Technology program with CHED IV-B order number 10 series of 2012.<br><br>
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
