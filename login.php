<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-lg">
    <div class="row mt-4">
        <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-8 col-10">
            <h1 style="text-align: center;" class="mt-3">Login</h1>
            <div class="container my-5">
                <div class="d-flex justify-content-center">
                <div class="card bg-light text-dark">
                <div class="card-header bg-info">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <form action="index.php" method="post">
                        <div class="form-group ">
                            <label for="Login" class="form-label">Login:</label>
                            <input type="text" name="login" id="Login" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="pwd" class="form-label">Password:</label>
                            <div class="input-group">
                                <input type="password" name="pwd" id="pwd" class="form-control">
                                <span class="input-group-text" onclick="password_show_hide()">
                                    <i class="bi bi-eye-fill" id="show_eye"></i>
                                    <i class="bi bi-eye-slash-fill d-none" id="hide_eye"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 ">
                            <button type="submit" class="btn btn-success btn-sm me-1">Login <?php include "door-open-fill.svg" ?> </button>
                            <button type="reset" class="btn btn-danger btn-sm ms-1">Reset <?php include "arrow-clockwise.svg" ?></button>
                        </div>
                        <div style="text-align: center;" class="mt-3">
                            <a href="register.php">กรุณาสมัครสมาชิก</a>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
    </div>
    </div>
</body>
</html>