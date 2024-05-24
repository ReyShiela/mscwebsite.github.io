<?php
$isLoggedIn = $_GET['loggedIn'] ?? '';
$username = $_GET['username'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>MARINDUE STATE COLLEGE</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
     <nav class="navigation-bar">
        <div class="navigation-bar-logo">
            <img class="logo" src="images/logomsc.png"></span>
            <div class="search-container">
                <h1 class="nav-title">Marinduque State College</h1>
            </div>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><?php echo "<a href='webpages/campusmap.php?loggedIn={$isLoggedIn}&username={$username}'>Campus map</a>"?></li>
            <li><?php echo "<a href='webpages/aboutus.php?loggedIn={$isLoggedIn}&username={$username}'>About Us</a>"?></li>
            <li>
                <?php
                if($isLoggedIn == 'false' || $isLoggedIn == ''){
                    echo '<a href="login.php">Login</a>';
                }
                else{
                    echo '<span style="font-size:2.6rem;" id="user-button" class="material-symbols-outlined">person</span>';
                }
                ?>
                <div class="dayalog">
                    <dialog id="dialog">
                        <?php
                        echo "<p style='font-size:2rem;'>{$username}</p>";
                        ?>
                        <div class="diadiv">
                            <a href="index.php?loggedIn=false" style="border: 1px solid black; padding:.8rem;">Logout</a>
                        </div>
                    </dialog>
                </div>
            </li>
        </ul>
    </nav>
    <main>
        <?php
        if($isLoggedIn == 'true'){
            echo '<h1 class="title">PROGRAMS</h1>';
        } elseif($isLoggedIn == 'false'){
            echo '<h1 class="title">WELCOME TO MARINDUQUE STATE COLLEGE</h1>';
        }else{
            echo '<h1 class="title">WELCOME TO MARINDUQUE STATE COLLEGE</h1>';
        }
        ?>
        <div class="courses">
            <div class="course-item">
                <?php
                echo "<a href='webpages/businessadd.php?loggedIn={$isLoggedIn}&username={$username}'>
                <img src='images/cllge-cab.png' alt='COLLEGE of BUSINESS AND ACCOUNTANCY'>
                </a>";
                ?>
                <span>COLLEGE OF BUSINESS AND ACCOUNTANCY</span>
            </div>
            <div class="course-item">
                <?php
                echo "<a href='webpages/artsandsocialscience.php?loggedIn={$isLoggedIn}&username={$username}'>
                <img src='images/cllge-CASS.png' alt='COLLEGE OF ARTS AND SOCIAL SCIENCES'>
                </a>";
                ?>
                <span>COLLEGE OF ARTS AND SOCIAL SCIENCES</span>
            </div>
            <div class="course-item">
                <?php
                echo "<a href='webpages/alliedhealth.php?loggedIn={$isLoggedIn}&username={$username}'>
                <img src='images/cllge-cahs.png' alt='COLLEGE OF ALLIED HEALTH SCIENCES'>
                </a>";
                ?>
                <span>COLLEGE OF ALLIED HEALTH SCIENCES</span>
            </div>
            <div class="course-item">
                <?php
                echo "<a href='webpages/ces.php?loggedIn={$isLoggedIn}&username={$username}'>
                <img src='images/cllge-ces.png' alt='COLLEGE OF ENVIRONMENTAL STUDIES'>
                </a>";
                ?>
                <span>COLLEGE OF ENVIRONMENTAL STUDIES</span>
            </div>
            <div class="course-item">
                <?php
                echo "<a href='webpages/cics.php?loggedIn={$isLoggedIn}&username={$username}'>
                <img src='images/cllge-cics.png' alt='COLLEGE OF INFORMATION AND COMPUTING SCIENCES'>
                </a>"; 
                ?>
                <span>COLLEGE OF INFORMATION AND COMPUTING SCIENCES</span>
            </div>
            <div class="course-item">
                <?php
                echo "<a href='webpages/cit.php?loggedIn={$isLoggedIn}&username={$username}'>
                <img src='images/cllge-cIT.png' alt='COLLEGE OF INDUSTRIALTECHNOLOGY'>
                </a>";
                ?>
                <span>COLLEGE OF INDUSTRIAL TECHNOLOGY</span>
            </div>
            <div class="course-item">
                <?php
                echo "<a href='webpages/educ.php?loggedIn={$isLoggedIn}&username={$username}'>
                <img src='images/cllge-of-education.png' alt='COLLEGE OF EDUCATION'>
                </a>";
                ?>
                <span>COLLEGE OF EDUCATION</span>
            </div>
            <div class="course-item">
                <?php
                echo "<a href='webpages/ce.php?loggedIn={$isLoggedIn}&username={$username}'>
                <img src='images/cllge-of-engineering.png' alt='COLLEGE OF ENGINEERING'>
                </a>";
                ?>
                <span>COLLEGE OF ENGINEERING</span>
            </div>
            <div class="course-item">
                <?php
                echo "<a href='webpages/gov.php?loggedIn={$isLoggedIn}&username={$username}'>
                <img src='images/cllge-of-governance.png' alt='COLLEGE OF GOVERNANCE'>
                </a>";
                ?>
                <span>COLLEGE OF GOVERNANCE</span>
            </div>
        </div>
    </main>
    <?php
    if($isLoggedIn == 'true'){
        echo "
        <main>
        <h1 class='title' id='facilities'>FACILITIES</h1>
        <div class='courses'>
            <div class='course-item'>
                <a href='webpages/facilities.php?loggedIn=true&username={$username}&location=Admin-Office'>
                <img src='images/adminoffice-icon.JPG' alt='admin office'>
                </a>
                <span>Admin Office</span>
            </div>
            <div class='course-item'>
                <a href='webpages/facilities.php?loggedIn=true&username={$username}&location=Gymnasium'>
                <img src='images/gym-icon.JPG' alt='Gym'>
                </a>
                <span>Gymnasium</span>
            </div>
            
            <div class='course-item'>
                <a href='webpages/facilities.php?loggedIn=true&username={$username}&location=Grandstand'>
                <img src='images/grandstand-icon.JPG' alt='Grandstand'>
                </a>
                <span>Grandstand</span>
            </div>
            <div class='course-item'>
                <a href='webpages/facilities.php?loggedIn=true&username={$username}&location=Clinic'>
                <img src='images/clinic-icon.JPG' alt='Clinic'>
                </a>
                <span>Clinic</span>
            </div>
            <div class='course-item'>
                <a href='webpages/facilities.php?loggedIn=true&username={$username}&location=Oval'>
                <img src='images/oval-icon.JPG' alt='Oval'>
                </a>
                <span>Oval</span>
            </div>
            <div class='course-item'>
                <a href='webpages/facilities.php?loggedIn=true&username={$username}&location=Canteen'>
                <img src='images/canteen-icon.JPG' alt='Canteen'>
                </a>
                <span>Canteen</span>
            </div>
            <div class='course-item'>
                <a href='webpages/facilities.php?loggedIn=true&username={$username}&location=Mini-Forest'>
                <img src='images/miniforest-icon.JPG' alt='Mini Forest'>
                </a>
                <span>Mini Forest</span>
            </div>
            <div class='course-item'>
                <a href='webpages/facilities.php?loggedIn=true&username={$username}&location=Canopy'>
                <img src='images/canopy-icon.JPG' alt='Canopy'>
                </a>
                <span>Canopy</span>
            </div>
            <div class='course-item'>
                <a href='webpages/facilities.php?loggedIn=true&username={$username}&location=Library'>
                <img src='images/library-icon.JPG' alt='Library'>
                </a>
                <span>Library</span>
            </div>
        </div>
    </main>
        ";
    }
    ?>
    <?php
    if($isLoggedIn == 'false' || $isLoggedIn == ''){
        echo '<hr>
    <footer>
        <div class="wrapper">
            <h2 class="about-us-title">About Us</h2>
            <div class="gate-div">
                <img src="./images/gate.jpg" alt="gate">
                <p style="text-align: justify;"><span style="margin-left:2rem;"></span>Marinduque State College (MSC) is a public college in the Philippines. Established in 1952, the college has a main campus on Boac and three branch campuses. The university offers programs in Agriculture, Science, Technology, and Trades. MSC consists of one main campus located at Boac, (capital of Marinduque) and three more branches located at Sta. Cruz, Torrijos and Gasan. MSC provides a learning resource center (library and multimedia services), student publication, Office of the Student Affairs (OSA) student organizations and activities, Guidance and Psychological Testing Services, Health Services (Medical and Dental), Scholarship and Financial Assistance Program, and Sports, Physical education and Recreation (SPEAR). It has services like a dormitory, internet, canopy and study sheds, bulletin boards, and speech laboratory.Marinduque State College has a variety of courses and it was divided by its Campus Branches to municipalities, such as Boac Campus, Sta. Cruz Campus, Gasan Campus, and Torrijos Campus. (except the municipalities of Buenavista and Buenavista). As of 2021, it has received certificates of compliance from the Commission on Higher Education Regional Office IV-B (CHEdRO–Mimamropa) for its academic programs.</p>
            </div>
        </div>
    </footer>
    <hr>
    <div style="display: flex; align-items:center; justify-content: center; padding: 2rem;">
        <h2 style="font-size: 4rem;">Campus Map</h2>
    </div>
    <div class="map_main">
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1940.1655755879638!2d121.8376036662535!3d13.453672900775661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a327b4112f0c4d%3A0x2f14f918f6027d99!2sCindy&#39;s%20Cafe!5e0!3m2!1sen!2sph!4v1685092486293!5m2!1sen!2sph" width="250" height="500" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>';
    }
    ?>
    <script>
        document.getElementById('user-button').addEventListener('click', () => {
            document.getElementById('dialog').showModal()
        })
    </script>
</body>
</html>





           
