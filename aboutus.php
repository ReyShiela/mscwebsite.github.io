<?php
$isLoggedIn = $_GET['loggedIn'] ?? '';
$username = $_GET['username'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARINDUE STATE COLLEGE</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
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
.diosdado{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    flex-direction: column;
    background-color: hsla(109, 69%, 29%, 20%);

}
.president-info img{
    width: 10rem;
    height: 10rem;
    border-radius: 50%;
}
.president-info{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: .8rem;
    padding-bottom: 4rem;
}
.diosdado{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    flex-direction: column;
    background-color: hsla(109, 69%, 29%, 20%);

}
.president-info img{
    width: 10rem;
    height: 10rem;
    border-radius: 50%;
}
.president-info{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: .8rem;
    padding-bottom: 4rem;
}
.content-container{
    display: flex;
    flex-direction: column;
    gap: 2rem;
    padding-block: 4rem;
}
.content-container p{
    font-size: 2rem;
}
.content-container div{
    background-color: gainsboro;
    border-left: .4rem solid var(--bg);
    border-radius: .2rem;
    padding: .8rem;
    display: flex;
    flex-direction: column;
    gap: .8rem;
}
.content-container h2{
    font-size: 2.2rem;
    font-weight: 600;
}
.content-container section{
    display: flex;
    flex-direction: column;
    gap: 2rem;
    justify-content: center;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .menu-bar {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .menu-bar ul {
            list-style-type: none;
            padding: 0;
        }
        .menu-bar ul li {
            display: inline;
            margin-right: 20px;
        }
        .menu-bar ul li a {
            color: #fff;
            text-decoration: none;
        }
        .menu-bar ul li a:hover {
            color: #ffd700; /* Change color on hover */
        }
        .search-container {
            text-align: center;
            margin-top: 20px;
        }
        .wrapper {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: green;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .president-info {
            text-align: center;
            margin-top: 25px;
        }
        .president-info img {
            width: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .president-info span {
            font-weight: bold;
        }
        .content-container {
            margin-top: 20px;
        }
        h1, h2 {
            color: #333;
        }
        p {
            line-height: 1.6;
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
            <li><a href="campusmap.php">Campus Map</a></li>
            <li><a href="webpages/aboutus.php">About Us</a></li>
        </ul>
    </nav>
    <div class="">
        <div class="diosdado" id="about-us">
                <h1 style="font-size: 4rem;">MARINDUQUE STATE COLLEGE</h1>
                <div class="president-info">
                    <img src="../images/diosdado.jpg" style="height: 16rem; width: 16rem;" alt="Prof.Diosdado P. Zulueta, DPA">
                    <span style="font-size: 2rem;">Prof. Diosdado P. Zulueta, DPA</span>
                    <span style="font-size: 1.6rem;">President</span>
                </div>
        </div>
        <div class="content-container">
                    <div>
                        <h2>Vision</h2>
                        <p>An advanced and adaptive university pursuing quality education, lifelong gender-sensitive learning environment, responsive research-based community programs, and transparent governance with sustainable resource generation by 2025.</p>
                    </div>
                    <div>
                        <h2>Mission</h2>
                        <p>The mission of Marinduque State College is to provide advanced education, higher technological and professional instruction and training in various fields of study. The college aims to empower God-fearing individuals who are innovators and protectors for the sustainable development of the province and the country. The college also strives to provide excellence in instruction, research, extension, and production that magnifies W.I.S.D.O.M. in leadership. W.I.S.D.O.M. stands for Wisdom, Integrity, Service, Discipline, Order, and Morality.</p>
                    </div>
                    <section>
                        <h2>History</h2>
                        <div>
                            <p>Republic Act No. 805, Approved, June 21, 1953, Approved by Congressman Panfilo M. Manguera, Signed into Law by President Elpidio Quirino An act to establish, organize and maintain one National High School of Arts and Trades in the Municipality of Boac, province of Marinduque, to be known as the Marinduque School of Arts and Trades and to authorize the appropriation of funds for the purpose.</p>
                        </div>
                        <div>
                            <p>Republic Act No. 377, Approved, April 8, 1983, Approved by: Assemblywoman Carmencita O. Reyes, Signed into Law by: President Ferdinand E. Marcos An act converting the Marinduque School of Arts and Trades into the Marinduque Institute of Science and Technology, broadening for the purpose its curricular programs in Science and Technology.</p>
                        </div>
                        <div>
                            <p>Republic Act No. 6833, Approved, January 5, 1990, Authored by Congresswoman Carmencita O. Reyes, Signed into Law: President Corazon C. Aquino An act changing the name of the Marinduque Institute of Science and Technology in Barangay Tanza, Municipality of Boac, province of Marinduque to Marinduque State College.</p>
                        </div>
                        <div>
                            <p>Republic Act No. 7319, Approved, March 30, 1992, Authored by Congresswoman Carmencita O. Reyes, Signed into Law: President Corazon C. Aquino An act establishing the College of Agriculture in Barangay Poctoy, Municipality of Torrijos; the college of Fisheries in Baranggay Pinggan, Municipality of Gasan; and the Marinduque Community College in the Municipality of Sta. Cruz, all in the province of Marinduque as branches of the Marinduque State College, Boac, Marinduque.</p>
                        </div>
                    </section>
                </div>
            
    </div>
</body>
</html>
