
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>X Company</title>
    <style>
body 
{
    margin: 0;
    font-family: Arial, sans-serif;
    background: white;
    color: #333;
}


header 
{
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ccc;
    background-color: #f9f9f9;
}

.logo span 
{
    color: green;
    font-size: 32px;
    font-weight: bold;
}


nav a 
{
    margin-left: 20px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
    transition: color 0.3s ease;
}

nav a:hover 
{
    color: green;
}


main 
{
    padding: 100px;
}
form 
{
    max-width: 500px;
    margin: 20px auto;
    padding: 15px;
    border: 1px solid #ccc;
    background: #f9f9f9;
    border-radius: 5px;
}
        form h2 
        {
            margin-top: 0;
        }
        .form-group 
        {
            margin-bottom: 15px;
        }
        label 
        {
            display: inline-block;
            width: 120px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            padding: 5px;
            width: 200px;
        }

footer 
{
    text-align: center;
    padding: 12px;
    border-top: 1px solid #ccc;
    background-color: #f9f9f9;
    position: fixed;
    bottom: 0;
    width: 100%;
    font-size: 14px;
    color: #555;
}
    </style>
</head>
<body>
<?php
$nameErr = $emailErr = $userNameErr = $passwordErr =$confirmPasswordErr = $genderErr = $dateOfBirthErr ="";
$name = $email = $userName = $password =$confirmPassword = $gender = $dateOfBirth ="";


if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if (empty($_POST["name"])) 
    {
      $nameErr = "Name is required";
    } 
    else 
    {
      $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"])) 
    {
      $emailErr = "Email is required";
    } 
    else
    {
      $email = test_input($_POST["email"]);
    }
    if (empty($_POST["userName"])) 
    {
      $userNameErr = "User name is required";
    } 
    else
    {
      $userName = test_input($_POST["userName"]);
    }
    if (empty($_POST["password"])) 
    {
      $passwordErr = "Password is required";
    } 
    else
    {
      $password = test_input($_POST["password"]);
    }
    if (empty($_POST["confirmPassword"])) 
    {
      $confirmPasswordErr = "Confirm Password is required";
    } 
    else
    {
      $confirmPassword = test_input($_POST["confirmPassword"]);
    }
    if (empty($_POST["gender"])) 
    {
      $genderErr = "Gender is required";
    } 
    else
    {
      $gender= test_input($_POST["gender"]);
    }
    if (empty($_POST["dateOfBirth"])) 
    {
      $dateOfBirthErr = "Date of birth is required";
    } 
    else
    {
      $dateOfBirth = test_input($_POST["dateOfBirth"]);
    }
}   
?>
<header>
    <div class="logo">
        <img src="Logo.png" alt="Company Logo" style="height:40px; vertical-align:middle; margin-right:8px;">
    </div>
    <nav>
        <a href="publicHome.php ">Home</a>
        <a href=" ">Login</a>
        <a href="registration.php ">Registration</a>
    </nav>
</header>

<main>
<form action="#" method="post">
<h2>Login</h2>
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" required>
        </div>
        <hr>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <hr>
        
        <div class="form-group">
            <input type="checkbox" name="rememberMe" value="remember"> Remember Me
        </div>

        <div class="buttons">
            <input type="submit" value="Submit">
            <a href="forgetPassword.php ">Forget Password?</a>
        </div>
    </form>
</main>

<footer>
    copyright @ 2017
</footer>

</body>
</html>



