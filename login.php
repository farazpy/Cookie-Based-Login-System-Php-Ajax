<!DOCTYPE html>
<html>
<head>
    <title> Login Page | Company </title>
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


    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-signin p-4 bg-white rounded shadow">
                        <form>
                            <a href="index.php"><img src="https://i.instander.in/images/logo-icon.png" class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
                            <h5 class="mb-3 text-center">Please sign in</h5>
                            <span id="msg"></span>
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control"  id="email" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>


                            <button class="btn btn-primary w-100" type="button" id="login">Sign in</button>

                            <div class="col-12 text-muted mt-3">
                                <p class="mb-0 mt-3"><small class=" me-2">Email : demo@instander.in</small></p>
                                <p class="mb-0 mt-3"><small class=" me-2">Password : 123456789</small></p>
                            </div>
                            <!--end col-->

                            <p class="mb-0 text-muted mt-3 text-center">Login System By Faraz Khan</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>






    <script>
    $(document).ready(function() {

        $("#login").click(function() {

            var email = $("#email").val();
            var password = $("#password").val();


            $.ajax({
                type: "POST",
                url: "config/auth.php",
                data: {
                    email: email,
                    password: password
                },
                cache: false,
                success: function(data) {
                    
                    $("#msg").html(data);
                },
                error: function(xhr, status, error) {
                    $("#msg").html(xhr);
                    console.error(xhr);
                }
            });

        });

    });
    </script>
</body>
</html>