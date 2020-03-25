<?php
    $conn = mysqli_connect("db", "root", "n0h4cksmydbplz", "blogsrus");

    if(isset($_GET["id"]) && isset($_GET["title"]) && isset($_GET["content"])){
        echo "<script>alert('Get Away Hacker! There is nothing here anyways 😡.')</script>";

        mysqli_query($conn, "INSERT INTO posts (user_id, title, content) VALUES (". $_GET["id"] .", '" . $_GET["title"] . "', '" . $_GET["content"] . "')");

        die("");
    }

    echo "<!-- Hey Jack, I don't know what these lines do. Can you explain it to me later? A.L -->";

    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "<!-- SELECT id FROM users WHERE username = '" . $username  . "' AND password = '" . md5($password) . "' -->";

    $result = mysqli_query($conn, "SELECT id FROM users WHERE username = '" . $username  . "' AND password = '" . md5($password) . "'") or die("Bye Hacker.");

    $id = -1;

    if($row = mysqli_fetch_row($result)) {
        $id = $row[0];
    } else {
        die("Are you sure you exist 👩‍🚀🐱‍🚀?");
    }

    echo "<!-- SELECT posts.id, posts.title, posts.content FROM users RIGHT JOIN posts ON users.id = posts.user_id WHERE username = '" . $username  . "' AND password = '" . md5($password) . "' ORDER BY posts.id DESC -->";

    $result = mysqli_query($conn, "SELECT users.id, posts.id, posts.title, posts.content FROM users RIGHT JOIN posts ON users.id = posts.user_id WHERE username = '" . $username  . "' AND password = '" . md5($password) . "' ORDER BY posts.id DESC") or die("Bye Hacker.");
?>

<html>
    <head>
        <!-- I guess this is where we put all the styles? - A.L -->
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
        </style>
    </head>

    <body>
        <h3>Welcome <?= $username ?></h3>
        <table id="I'm so fed up of fixing this site from hackers. Can't I just pay someone to do this? - Jack">
            <tr>
                <th>Title</th>
                <th>Content</th>
            </tr>
            <?php
                while($row = mysqli_fetch_row($result)) {
                    $id = $row[0];

                    echo '<tr><td>' . $row[2] . '</td><td>' . $row[3] . '</td></tr>';
                }
            ?>
        </table>
        <script>
            /**
            * If you are a hacker, get away now 😡😡.
            * 
            * Lol - H4ck3r
            */
            const iDontReallyKnowWhatItDoesButItWorksAL = () => {
                // I just copied this code online. It's working I guess 🧜‍♂️. - A.L

                fetch(`./?id=<?= $id ?>&title=${document.getElementById("titleeeeeeeee").value}&content=${document.getElementById("dataOrWhatever LOL").value}`).then(e => e.text()).then(data => console.log(data));

                var row = document.getElementById("I'm so fed up of fixing this site from hackers. Can't I just pay someone to do this? - Jack").insertRow(1);

                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);

                cell1.innerHTML = document.getElementById("titleeeeeeeee").value;
                cell2.innerHTML = document.getElementById("dataOrWhatever LOL").value;
            }
        </script>
        <div id="Hackers, there is nothing here! Move along!">
            <h3>Make a Secret Post</h3>
            <input id="titleeeeeeeee" />
            <input id="dataOrWhatever LOL" />
            <button onClick="iDontReallyKnowWhatItDoesButItWorksAL()">Submit</button>
        </div>
    </body>
</html>

<?php
    mysqli_close($conn);
?>