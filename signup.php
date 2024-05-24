<?php
require 'config.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"]; 
    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'"); 
    if(mysqli_num_rows($duplicate) > 0){
        echo 
        "<script> alert('Username or Email Has Already Been Taken'); </script>"; 
    }
    else{
        if($password == $confirmPassword){ 
            $query = "INSERT INTO users VALUES ('', '$name', '$username', '$email', '$password')";
            mysqli_query($conn, $query);
            echo "<script> alert('Registration Successful'); </script>";
        }
        else{
            echo "<script> alert('Password Does Not Match'); </script>"; 
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>MARINDUE STATE COLLEGE</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="menu-bar">
        <img src="../images/logomsc.png" alt="Logo">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="" >Campus Legend</a></li>
            <li><a href="">About Us</a></li> 
            <li><a href="" class="active">Log In</a></li>
        </ul>
    </div>
    <div class="search-container">
        <form action="/search" method="GET">
            <input type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="container">
        <h1>Log In</h1>
        <form method="post" action="login.php">
            <label for="usernameemail">Username or Email</label> 
            <input type="text" name="usernameemail" required value=""> <br>

            <label for="password">Password</label>
            <input type="text" name="password" required value=""> <br>

            <button type="submit" name="submit">Login</button>
        </form>

        <!-- Sign-up button -->
        <a href="#" onclick="showSignUpForm()">Sign Up</a>


        <!-- Sign-up form -->
        <div class="signup-form container">
            <h1>Sign Up</h1>
            <form method="post" action="signup.php">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required value=""> <br>

                <label for="username">Username</label>
                <input type="text" name="username" id="username" required value=""> <br>

                <label for="email">Email</label>
                <input type="text" name="email" id="email" required value=""> <br>

                <label for="password">Password</label>
                <input type="text" name="password" id="password" required value=""> <br>

                <label for="confirm_password">Confirm Password</label>
                <input type="text" name="confirm_password" id="confirm_password" required value=""> <br>

                <button type="submit" name="submit">Sign Up</button>
                <button type="reset">Clear</button>
            </form>
        </div>
    </div>

    <script>
    function showSignUpForm() {
        var signUpForm = document.querySelector('.signup-form');
        signUpForm.style.display = signUpForm.style.display === 'none' ? 'block' : 'none'; // Set display property to "block" to make it appear
    } 
    </script>

</body>
</html>
