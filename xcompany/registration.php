
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
function test_input($data)
 {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
?>
<header>
    <div class="logo">
        <img src="Logo.png" alt="Company Logo" style="height:40px; vertical-align:middle; margin-right:8px;">
    </div>
    <nav>
        <a href="publicHome.php ">Home</a>
        <a href=" login.php">Login</a>
        <a href=" ">Registration</a>
    </nav>
</header>

<main>
<form action="#" method="post">
        <h2>Registration</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" >
            <span class="error">* Name is required  <?php echo $nameErr;?></span>
        </div>
        <hr>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <hr>
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
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" required>
        </div>
        <hr>
        <div class="form-group">
            <label>Gender:</label>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other
        </div>
        <hr>
        <div class="form-group">
            <label>Date of Birth:</label>
            <input type="date" name="dob" required>
        </div>
        <hr>
        <div class="buttons">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>
</main>

<footer>
    copyright @ 2017
</footer>

</body>
</html>



