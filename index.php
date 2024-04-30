<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portal</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1>Login to your account</h1>
            <form action="login-process.php" method="post">
                <label for="username">Username</label>
                <div class="margin-top"></div>
                <input type="text" id="username" name="username" placeholder="Enter username" class="focus" /><br><br>
                <label for="password">Password</label>
                <div class="margin-top"></div>
                <input type="password" id="password" name="PASSWORD" placeholder="Enter password" class="focus" /><br>

                <!-- Add user_type field -->
                <!-- <label for="user_type">User Type</label>
                <select name="user_type" id="user_type">
                    <option value="admin" name="admin">Admin</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                    <option value="parent">Parent</option>
                </select><br><br> -->
                <a href="#">Forgot password?</a><br>
                <button type="submit" class="submit-button">LOGIN</button>
            </form>
        </div>
        <div class="image-container">
            <img src="https://scontent.facc5-2.fna.fbcdn.net/v/t39.30808-6/271914308_400163515178075_703338172582087811_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_ohc=efw-n_VG5XsAb64uVK8&_nc_zt=23&_nc_ht=scontent.facc5-2.fna&oh=00_AfDbQFmLwBxvllWuKcSY54JntRmth75lfxAV7qQSX7dcoQ&oe=6615B201"
                alt="">
        </div>
    </div>
</body>

</html>