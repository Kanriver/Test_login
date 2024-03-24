<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-lg">
    <div class="row mt-4">
        <div class="col-lg-3 col-md-2 col-sm-1"></div>
        <div class="col-lg-6 col-md-8 col-sm-10">
            <h1 style="text-align: center;" class="mt-3">Register</h1>
            <div class="container my-5">
                <div class="d-flex justify-content-center">
                <div class="card bg-light text-dark">
                <div class="card-header bg-info text-white">สมัครสมาชิก</div>
                <div class="card-body">
                <form action="regis-save.php" method="post">
                        <div class="row">
                            <label for="user" class="col-lg-5 col-form-label">ชื่อบัญชี :</label>
                            <div class="col-lg-12">
                                <input id="user" type="text" name="login" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="pwd" class="col-lg-5 col-form-label">รหัสผ่าน :</label>
                            <div class="col-lg-12">
                                <input id="pwd" type="password" name="pwd" class="form-control" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 ">
                            <button type="submit" class="btn btn-warning btn-sm me-1">Confirm <?php include "check-circle-fill.svg" ?> </button>
                        </div>
                </form>
                </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1"></div>
    </div>
    </div>
</body>
</html>