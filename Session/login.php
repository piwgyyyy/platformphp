<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> LOGIN </title>
    </head>
    <body>
    <form action="" method="POST">
    <?php 
    
    if (isset($_SESSION['berhasil'])){
        header("Location: menuUtama.php");
     }
    
    if (isset($_POST['submit'])) {
        $username = $_POST['userName'];
        $password = $_POST['pin'];
        if ($username == "virgy" && $password == "112233") {
            $_SESSION['username'] = $username;
            header("Location: menuUtama.php");
        } else {
            header("Location: gagal.php");
        }
    }
    ?>
    <h1> LOGIN </h1>
        <label for="userName">username</label>
        <input type="text" name="userName"><br><br>
        <label for="pin">Password</label>
        <input type="password" name="pin"><br><br>
        <input type="submit" name="submit" class="submit">
    </form>
    </body>
</html>
