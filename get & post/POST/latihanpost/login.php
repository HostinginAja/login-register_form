<?php 
// MENGECEK TOMBOL UDAH DI PENCET APA BELOM 
if( isset($_POST["submit"])){
    if( $_POST["username"] == "username" && ($_POST["password"] == "biasa")){
        header("Location: admin.php");
    }
}else{
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
<ul>
    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Username :</label>
            <input type="password" name="password" id="password">
        </li>
        <button type="submit" name="submit">Kirim</button>
    </form>
    </ul>
</body>
</html>