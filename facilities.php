<?php
$loc = $_GET['location'] ?? '';
$isLoggedIn = $_GET['loggedIn'] ?? '';
$username = $_GET['username'] ?? '';


$dataFile = './data.xml';

if (file_exists($dataFile)) {
    $facts = simplexml_load_file($dataFile) or die("Error: Cannot create object");
} else {
    die("Error: XML file not found");
}

$facility = null;

foreach ($facts->location as $location) {
    if ((string) $location->title === $loc) {
        $facility = $location;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo "<title>{$loc}</title>";
    ?>
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
            echo "<a href='../index.php?loggedIn={$isLoggedIn}&username={$username}#facilities'>Home</a>";
            ?></li>
            <li><a href="webpages/campusmap.php">Campus Map</a></li>
            <li><a href="webpages/aboutus.php">About Us</a></li>
        </ul>
    </nav>
    <?php
    foreach ($facts->location as $location) {
        if ((string) $location->title === $loc) {
            echo "
            <div class='main-container' style='padding-top: 4rem;'>
                <video class='vid-container' controls>
                    <source class='vid' src='../images/{$loc}.MOV' type='video/mp4'>
                    Your browser does not support the video tag.
                </video> 
                <p class='program-offers withOutline'><strong class='strong'>{$location->title}</strong><br><span style='margin-left:2rem;'></span>{$location->content}</p>
            </div>";
        }
    }
    ?>
    <div class="feedback-container"> 
        <form action="MAILTO:mandalihanprinces1@gmail.com" class="feedback" method="post">
            <p>Feedback</p>
            <input type="text" name="message" maxlength="500" placeholder="Add comments?">
            <button type="submit" id='submit'>Send Feedback</button>
        </form>
    </div>
    <script>
        document.getElementById('submit').addEventListener('submit', () => {
            document.querySelector('input').value = ''
        })
    </script>
</body>
</html>