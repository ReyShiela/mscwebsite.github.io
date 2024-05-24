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
        <img class="course-logo" src="../images/cllge-ces.png" alt="COLLEGE 0f Arts And Social Science">
        <h2 class="course-title">COLLEGE OF ENVIRONMENTAL SCIENCES</h2>
    </div>

    <div class="main-container">
        <video controls class="vid-container">
            <source class="vid" src="../images/enviscie.MOV" type="video/mp4">
            Your browser does not support the video tag.
        </video>  
            <p class="program-offers"> <strong style="font-size: 2.8rem;"> PROGRAM OFFERS</strong><br><br>
            Bachelor of Environmental Sciences<br><br>
            Environmental Science covers a broad range of environmental concerns. It seeks to study the interactions between the environment and human society using the tools of science in an interdisciplinary way. Its primary objective is to use the various sciences in the study of the environment. Thus, it employs the scientific method as its principal framework and applies whichever science is needed to the study of the environment. Environmental Science also recognizes the critical role of human society in the environment; hence it lays the groundwork for the effective management of the environment.<br><br>
            MSC’s School of Environmental Sciences aims to produce graduates equipped with integrated multidisciplinary tools and approaches, perspectives and values related to environmental problems and concerns.
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
