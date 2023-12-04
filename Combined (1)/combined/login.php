<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
  
</head>

<body>
    

        <section>
            <div class="container">
                <div class="row justify-content-sm-center h-100">
                    <div
                        class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9 d-flex justify-content-center align-items-center vh-100">
                        <div class="card shadow-sm w-100">
                        <div class="card-header bg bg-primary">
                                <h3 class="mb-3 text-center text-light">Admin Login</h3>
                                </div>
                            <div class="card-body p-5">
                                
                                <?php
                                // Display alert message if login error exists
                                if (isset($_SESSION['login_error'])) {
                                    echo '<div class="alert alert-danger">' . $_SESSION['login_error'] . '</div>';
                                    unset($_SESSION['login_error']);
                                }
                                ?>
                                <form method="POST" action="login_process.php">
                                    <div class="form-group mb-3">
                                        <label>Email:</label>
                                        <input type="email" name="email" class="form-control m-2" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Password:</label>
                                        <input type="password" name="password" class="form-control m-2" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-2">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
    </body>

</html>