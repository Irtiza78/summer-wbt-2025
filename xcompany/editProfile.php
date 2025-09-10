<?php

$name = "Bob";
$email = "bob@aiub.edu";
$gender = "Male";
$dob = "19/09/1998";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile - XCompany</title>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: white;
    color: #333;
}

.container {
    width: 80%;
    margin: 20px auto;
    border: 1px solid #ccc;
    background: #fff;
}


header {
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ccc;
    background-color: #f9f9f9;
}

.logo {
    font-size: 28px;
    font-weight: bold;
    color: green;
}

.top-right a {
    margin-left: 15px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
    transition: color 0.3s ease;
}

.top-right a:hover {
    color: green;
}

.content {
    display: flex;
    padding: 20px;
    min-height: 400px;
}


.sidebar {
    width: 220px;
    border-right: 1px solid #ccc;
    padding-right: 15px;
}

.sidebar a {
    display: block;
    margin: 12px 0;
    text-decoration: none;
    color: #333;
    font-weight: bold;
    transition: color 0.3s ease;
}

.sidebar a:hover {
    color: green;
}


.main {
    flex: 1;
    padding-left: 30px;
}


.profile-box {
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 450px;
    background: #f9f9f9;
    border-radius: 5px;
}

.profile-box h3 {
    margin-top: 0;
    color: green;
    font-size: 22px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
}

.profile-box p {
    margin: 10px 0;
    font-size: 15px;
}

.profile-box strong {
    display: inline-block;
    width: 120px;
}

.profile-box img {
    width: 120px;
    display: block;
    margin: 15px 0;
    border-radius: 50%;
    border: 2px solid #ccc;
}

.profile-box a {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    font-weight: bold;
    color: #333;
    transition: color 0.3s ease;
}

.profile-box a:hover {
    color: green;
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
    <div class="container">
        <!-- Header -->
        <header>
            <img src="Logo.png" alt="Company Logo" style="height:40px; vertical-align:middle; margin-right:8px;">
            <span class="top-right">Logged in as <a href="#"><?php echo $name; ?></a> | <a href="publicHome">Logout</a></span>
        </header>

        <!-- Content -->
        <div class="content">
            <!-- Sidebar -->
            <div class="sidebar">
                <a href="dashboard.php">Dashboard</a>
                <a href="profile.php">View Profile</a>
                <a href="editProfile.php">Edit Profile</a>
                <a href="changePicture.php">Change Profile Picture</a>
                <a href="changePassword.php">Change Password</a>
                <a href="publicHome.php">Logout</a>
            </div>

            <!-- Main Profile -->
            <div class="main">
            <div class="profile-box">
                <h3>EDIT PROFILE</h3>
                <form method="post" action="update_profile.php">
                    <p><label>Name:</label> <input type="text" name="name" value="<?php echo $name; ?>"></p>
                    <p><label>Email:</label> <input type="email" name="email" value="<?php echo $email; ?>"></p>
                    <p><label>Gender:</label> 
                        <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male
                        <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female
                        <input type="radio" name="gender" value="Other" <?php if($gender=="Other") echo "checked"; ?>> Other
                    </p>
                    <p><label>Date of Birth:</label> <input type="text" name="dob" value="<?php echo $dob; ?>"> (dd/mm/yyyy)</p>
                    <p><input type="submit" value="Submit"></p>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            Copyright &copy; 2017
        </footer>
    </div>
</body>
</html>