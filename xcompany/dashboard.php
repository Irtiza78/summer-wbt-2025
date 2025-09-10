<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - XCompany</title>
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

.main h3 {
    margin-top: 0;
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
            <span class="top-right">Logged in as <a href="#">Bob</a> | <a href="publicHome.php">Logout</a></span>
        </header>


        <div class="content">
            <!-- Sidebar -->
            <div class="sidebar">
                <a href="#">Dashboard</a>
                <a href="profile.php">View Profile</a>
                <a href="editProfile.php">Edit Profile</a>
                <a href="changePicture.php">Change Profile Picture</a>
                <a href="changePassword.php">Change Password</a>
                <a href="publicHome.php">Logout</a>
            </div>

            <!-- Main -->
            <div class="main">
                <h3>Welcome Bob</h3>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            Copyright &copy; 2017
        </footer>
    </div>
</body>
</html>