<?php
    $conn = mysqli_connect("db", "root", "n0h4cksmydbplz", "blogsrus");

    if(isset($_GET["id"]) && isset($_GET["title"]) && isset($_GET["content"])){
        echo "<script>alert('Get Away Hacker! There is nothing here anyways 😡.')</script>";

        mysqli_query($conn, "INSERT INTO posts (user_id, title, content) VALUES (". $_GET["id"] .", '" . $_GET["title"] . "', '" . $_GET["content"] . "')");

        die("");
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT id FROM users WHERE username = '" . $username  . "' AND password = '" . md5($password) . "'") or die("Bye Hacker.");

    $id = -1;

    if($row = mysqli_fetch_row($result)) {
        $id = $row[0];
    } else {
        die("Are you sure you exist 👩‍🚀🐱‍🚀?");
    }

    echo "<!-- Hey Jack, I don't know what this line does. Can you explain it to me later? A.L -->";
    echo "<!-- SELECT posts.id, posts.title, posts.content FROM users RIGHT JOIN posts ON users.id = posts.user_id WHERE username = '" . $username  . "' AND password = '" . md5($password) . "' ORDER BY posts.id DESC -->";

    $result = mysqli_query($conn, "SELECT users.id, posts.id, posts.title, posts.content FROM users RIGHT JOIN posts ON users.id = posts.user_id WHERE username = '" . $username  . "' AND password = '" . md5($password) . "' ORDER BY posts.id DESC") or die("Bye Hacker.");
?>

<html>
    <head>
        <!-- I guess this is where we put all the styles? -->
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
        <table id="I'm so fed up of programming. Can't I just pay someone to do this?">
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
            const doSomething = () => {
                // I just copied this code online or whatever. It's working I guess 🧜‍♂️.









                /**
                 * 
                 * 
                 * 
                 * 
                 * 
                 * If you are a hacker, get away now 😡😡.
                 * 
                 * 
                 * 
                 * 
                 */








                fetch(
                    
                    
`./?id=<?= $id ?>&title=${
    
    
    
    
    
    document.getElementById("titleeeeeeeee"
    
    
    ).value}&content=${document.getElementById("dataOrWhatever LOL").value}`)
    
    
    
    .then(e => e.text())
    
    
    
                                                .then(data => console.log(data));

                document.getElementById("I'm so fed up of programming. Can't I just pay someone to do this?")


                                        for(let i = 0; i < 10; i ++){
                    console.log("🤡🥺🤡🤠🤡🥺🤠🤡🤠🥺🤡");
                }

                var row = document.getElementById("I'm so fed up of programming. Can't I just pay someone to do this?").insertRow(1);












                console.log("I did something here and it did something there.");

                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);

                cell1.innerHTML = document.getElementById("titleeeeeeeee").value;
                cell2.innerHTML = document.getElementById("dataOrWhatever LOL").value;
            }
        </script>
        <div>
            <h3>Make a Secret Post</h3>
            <input id="titleeeeeeeee" />
            <input id="dataOrWhatever LOL" />
            <button onClick="doSomething()">Submit</button>
        </div>
    </body>
</html>

<?php
    mysqli_close($conn);
?>