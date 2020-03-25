<?php
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $conn = mysqli_connect("db", "root", "n0h4cksmydbplz", "blogsrus");
        
        mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('" . $_POST["username"]  . "', '" . md5($_POST["password"]) . "')") or die("Bye Hacker.");

        mysqli_close($conn);
    }
?>

<html>
    <head>
        <style>
            form {
                width: 100%;
                display: grid;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <h1>Blogs "Я" Us</h1>
        <p>Let us take care of your private blogs!</p>
        <br /><br /><br /><br /><br />
        <form method="post" action="/posts/index.php">
            <h3>Login</h3>
            <input name="username" id="username" />
            <br />
            <br />
            <input name="password" type="password" id="password" />
            <br />
            <br />
            <input type="submit" />
        </form>
        <br /><br />
        <form method="post" action="/">
            <h3>Sign Up</h3>
            <input name="username" id="username" />
            <br />
            <br />
            <input name="password" type="password" id="password" />
            <br />
            <br />
            <input type="submit" />
        </form>
    </body>
</html>
