<?php 
$servername='localhost';
$username='root';
$password='';
$db = "login_system";
$conn=mysqli_connect($servername,$username,$password,"$db");


// Get user data if he/she's logged in //

if(isset($_COOKIE['remember_token'])) {

    $remember_token = $_COOKIE['remember_token'] ;
 
    $user_sql = mysqli_query($conn, "SELECT * FROM users WHERE remember_token='$remember_token'");
    $user = mysqli_fetch_array($user_sql) ;
}

?>