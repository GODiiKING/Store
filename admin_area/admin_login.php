<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- font awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom CSS -->
     <style>
        body {
            overflow: hidden;
        }
     </style>
</head>
<body class="bg-dark">
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5 text-light">Admin Login</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
            <img src="../images/logo.png" alt="Admin Registration" class="img-fluid mx-auto d-block" style="max-width: 30%; height: auto;">
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
                <form action="" method="post">
                    <div class="form-outline mb-4 text-light">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required="required" class="form-control">
                    </div>

                    <div class="form-outline mb-4 text-light">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required="required" class="form-control">
                    </div>

                    <input type="submit" name="admin_login" value="Login" class="bg-secondary py-2 px-3 border-0">
                    <p class="small fw-bold mt-2 pt-1 text-light">Already have an account? <a href="admin_registration.php" class="link-danger">Register</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>