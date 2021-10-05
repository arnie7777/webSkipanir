<?php include("base.php");?>
<?php
// connect to database and check for errors
$connection = mysqli_connect('localhost', 'root', '', 'MathForKids');

// if there is a connection error
if(!$connection){
    echo 'Error when trying to connect to database' . mysqli_connect_error();
} // end if

// if submit button below person fields is pressed
if(isset($_POST['submit'])) {
    // Get user submitted credentials
    $username = $_POST['username'];
    $password = $_POST['password'];

    // write sql query
    $sql = 'SELECT id, username, password FROM Credentials';
    $result = $connection->query($sql);

    // If there exists credentials in the credentials database
    if ($result) {
        // for each row of credentials
        while($row=$result->fetch_assoc()) {
            // Check if username and password match
            if ($row['username'] == $username and $row['password'] == $password) {
                header("location: Home.html?id=" . $row['id']);
                exit();
            } elseif ($row['username'] == $username) {
                print("Wrong password!");
            } else {
                print("User doesn't exist.");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <body>
        <div class="login-page">
                <form method="post" action="Login.php">
                    <input name="username" type="text" id="username" placeholder="username">
                    <input name="password" type="password" id="password" placeholder="password">
                    <input name="submit" id="login" type="submit">
                </form>
        </div>
    </body>
</html>
