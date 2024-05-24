<?php
$isLoggedIn = $_GET['loggedIn'] ?? '';
$username = $_GET['username'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
<title>MARINDUE STATE COLLEGE</title>
<link rel="stylesheet"  type="text/css" href="../css/style.css">
<style>
           .navigation-bar{
    display: flex;
    background: var(--bg);
    width: 100%;
    justify-content: space-between;
    padding-block: .8rem;
    padding-inline: 2rem;
}
.navigation-bar-logo{
    display: flex;
    align-items: center;
    gap: 2rem;
}
.logo{
    width: 6rem;
    height: 6rem;
}
.search-container{
    display: flex;
    align-items: center;
    gap: .8rem;
}
.search-input,
.search-button{
    background-color: whitesmoke;
    outline: none;
    border: none;
    padding: .4rem;
    border-radius: 2rem;
}
.nav-links{
    display: flex;
    align-items: center;
    gap: 2rem;
}
.nav-links a{
    color: black;
    text-decoration: none;
    font-size: 1.2rem;
}
.nav-links a:hover{
    color: whitesmoke;
}
.nav-links li{
    list-style: none;
}
.nav-title {
  font-size: 2rem;
  font-weight: 600;
}
</style>
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
            <li><?php echo "<a href='campusmap.php?loggedIn={$isLoggedIn}&username={$username}'>Campus Map</a>"?></li>
            <li><?php echo "<a href='aboutus.php?loggedIn={$isLoggedIn}&username={$username}'>About Us</a>"?></li>
        </ul>
    </nav>
   <div>
     <h1 style="padding-bottom: 2rem;margin-left: 14rem;margin-top: 100px; font-size: 4rem;">CAMPUS MAP OF MARINDUQUE STATE COLLEGE</h1>
    <div class="map_main">
                     <div class="map-responsive" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1649.6431822584134!2d121.84441405350078!3d13.45423121348153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a3264c40e0104b%3A0xf06fb8b6db2af6ba!2sMarinduque%20State%20College!5e1!3m2!1sen!2sph!4v1715489814813!5m2!1sen!2sph"width="250" height="500" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
    <footer class="footermarinduque" style="background-color: #f0f0f0; padding: 20px;">
        <div style="text-align: center;">
            <img src="../images/logomsc.png" alt="Marinduque State College Logo" style="width: 4rem; height: 4rem; margin-bottom: 10px;">
        </div>
        <p style="text-align: center; font-family: Arial, sans-serif; font-size: 14px; color: #333;">&copy; 2024 Marinduque State College</p>
        <p style="text-align: center; font-family: Arial, sans-serif; font-size: 14px; color: #333;">Panfilo M. Manguera, Sr. Road, Tanza, Boac, Marinduque</p>
        <p style="text-align: center; font-family: Arial, sans-serif; font-size: 14px; color: #333;">Tel No. (042) 332-2-20/2728</p>
        <p style="text-align: center; font-family: Arial, sans-serif; font-size: 14px; color: #333;">All Rights Reserved.</p>
    </footer>
</div>

        
    </div>
</body>
</html>