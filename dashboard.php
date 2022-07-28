<?php
if ($user['id'] == null) {
    header("location:login.php");
} ?>


<!DOCTYPE html>
<html id="instander_kits">

<head>
    <title> Dashboard| Company </title>
    <meta name="viewport" content="width=device-width">
    <script src="https://i.instander.in/js/jquery-3.6.0.min.js"></script>
    <script src="https://i.instander.in/instander/js/fontawesome_6.js"></script>
    <link rel="stylesheet" href="https://i.instander.in/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://i.instander.in/css/style.css">

</head>

<body>

    <!-- Web Page Contents -->

    <nav class="bg-light p-1">
        <h6 class="h4 m-2">Login System <i class="fal fa-key" aria-hidden="true"></i></h6>
    </nav>


    <h3 class="m-4 mt-5">Welcome , <?php echo $user['name']; ?></h3>

    <a href="logout.php" class="m-4 btn btn-danger">Logout</a>





</body>

</html>