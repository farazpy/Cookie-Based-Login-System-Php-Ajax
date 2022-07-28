<?php  


    $user_email =  $_POST['email'] ;
    $user_password = $_POST['password'] ;


    $search_user_sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$user_email'");
    

    // Checking for existance of user //

    if(mysqli_num_rows($search_user_sql)<1) { 
        echo '<div class="alert alert-danger">User not found !</div>' ;
      }


    else {

        $user = mysqli_fetch_array($search_user_sql);               // Getting selected users data //
        if(password_verify($user_password, $user['password'])) {   //Checking if password is correct //
            $remember_token = $user['remember_token'] ;             //Getting token of user and set cookie //
            setcookie("remember_token",$remember_token,time() + (20 * 365 * 24 * 60 * 60),'/') ; 
            echo '<div class="alert alert-success">Login Success !</div>' ;
            echo '<meta http-equiv="refresh" content="2,url=dashboard.php" />' ; // Redirecting to Dashboard
        }
        
        else {
            die('<div class="alert alert-danger">You have entered wrong password !</div>') ;
        }

    }


?>