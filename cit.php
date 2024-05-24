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
        <img class="course-logo" src="../images/cllge-cit.png" alt="COLLEGE 0f Arts And Social Science">
        <h2 class="course-title" class="college-heading">COLLEGE OF INDUSTRIAL TECHNOLOGY </h2>
    </div>

    <div class="main-container">
        <video controls class="vid-container">
            <source class="vid" src="../images/industrial.MOV" type="video/mp4">
            Your browser does not support the video tag.
        </video>
            <p class="program-offers"> <strong style="font-size: 2.8rem;"> PROGRAM OFFERS</strong><br><br>
            Automotive Technology<br>
            Drafting Technology<br>
            Electrical Technology<br>
            Foods Technology<br>
            Garments Technology<br>
            Mechanical Technology<br>
            Refrigeration and Air-Conditioning Technology<br>
            Welding and Fabrication Technology<br><br>
            Marinduque State College was established in 1952 as Marinduque School of Arts and Trades by virtue of Republic Act 805, the School had been operating the two-year Technical Curricula. During that year, Industrial Technology was a separate section which was headed by  Mr. Respicio A. Javier. The following courses were offered at the time: Technical Automotive Mechanics, Technical Building Construction, Technical Drafting, Technical Electricity, Technical Cosmetology, Garments Trades and Technical Food Trades.In Academic Year 1975 – 1976 the Department of Education Culture and Sports (DECS) Order No. 28 s. 1975 authorized the school to offer the four-year Bachelor of Science in Industrial Technology Curriculum (BSIT).<br><br>
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
