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
        <img class="course-logo" src="../images/cllge-of-governance.png" alt="COLLEGE 0f Arts And Social Science">
        <h2 class="course-title">COLLEGE OF GOVERNANCE</h2>
    </div>

    <div class="main-container">
        <video class="vid-container" controls>
            <source class="vid" src="../images/governance.MOV" type="video/mp4">
            Your browser does not support the video tag.
        </video>
            <p class="program-offers"> <strong style="font-size: 2.8rem;">PROGRAM OFFERS</strong><br><br>
            Bachelor of Public Administration (BPA) (Level V AACCUP Re-accredited)<br>
            Bachelor of Science in Law Enforcement Administration (BS LEAD) (Level II AACCUP Re-accredited)<br>
            Bachelor of in Science in Political Science (BS POS) (Level II AACCUP Re-accredited)<br><br>
            School of Governance (SGov) was shaped as one of the newest Schools of Marinduque State College. The School aims to develop students to become life-long learners, multi-skilled and professional public leaders and servants that could initiate reforms and promote good governance, embodying the values of ethical standards, accountability, discipline, and excellence.<br><br>
            SGov offered three programs: the Bachelor of Public Administration (BPA), the Bachelor of Science in Law Enforcement Administration (BS LEAD), and the Bachelor of Arts in Political Science (BA PoS – at MSC Sta. Cruz branch). Prior to the creation of SGov, the Bachelor in Public Administration program was first offered by the College in AY 2012-2013 under the School of Business and Management, while the BA in Political Science was offered by the School of Liberal Arts in Sta Cruz campus after MSC “adopted” Marinduque Community College through Republic Act 7319. The BS LEAD program, on the other hand had its beginnings on March 18, 2008 when the Board of Trustees approved the offering  starting the first semester of that year through BOT Resolution no. 14 s. 2008 under the School of Arts and Sciences in Boac.<br>
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
