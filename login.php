<!DOCTYPE html>
<html>
<head>
    <title>MARINDUE STATE COLLEGE</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
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
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #555;
        }
        .signup-link {
            text-align: center;
            margin-top: 10px;
        }
        .signup-link a {
            color: #333;
            text-decoration: none;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
        .signup-form {
            display: none;
        }
    </style>
</head>
<body>
    <div class="menu-bar">
        <img src="../images/logomsc.png" alt="Logo">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../webpages/campuslegend.php">Campus Map</a></li>
            <li><a href="../webpages/aboutus.php">About Us</a></li> 
            <li><a href="login.php">Log In</a></li>
        </ul>
    </div>
    <div class="search-container">
        <form action="/search" method="GET">
            <input type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <h1>Log In</h1>
    <form method="post" action="login.php">
        <label for="usernameemail">Username or Email</label> 
        <input type="text" name="usernameemail" required value=""> <br>

        <label for="password">Password</label>
        <input type="password" name="password" required value=""> <br>

        <button type="submit" name="submit">Login</button>
    </form>

    <!-- Sign-up button -->
    <div class="signup-link">
        <a href="#" onclick="showSignUpForm()">Sign Up</a>
    </div>

    <!-- Sign-up form -->
    <div class="signup-form">
        <h1>Sign Up</h1>
        <form method="post" action="signup.php">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required value=""> <br>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" required value=""> <br>

            <label for="email">Email</label>
            <input type="text" name="email" id="email" required value=""> <br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required value=""> <br>

            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" required value=""> <br>

            <button type="submit" name="submit">Sign Up</button>
            <button type="reset">Clear</button>
        </form>
    </div>

    <script>
    function showSignUpForm() {
        var signUpForm = document.querySelector('.signup-form');
        signUpForm.style.display = signUpForm.style.display === 'none' ? 'block' : 'none'; // Set display property to "block" to make it appear
    } 
    </script>
</body>
</html>
