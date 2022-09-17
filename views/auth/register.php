<?php

// echo $_POST['email'];
// echo $_SERVER['REQUEST_METHOD'];

$error = [];


// if (empty($email) or empty($password) or empty($re_password)) {
// }

$errors = [
    "email" => "Harap mengisi email",
    "password" => "Harap mengisi password",
    "re_password" => "Harap mengisi ulang password",
];


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     //validation
//     if (empty($_POST['email']) == TRUE) {
//         $errors['email'] = "Harap Mengisi Email";
//     }
//     if (empty($_POST['password']) == TRUE) {
//         $errors['password'] = "Harap Mengisi password";
//     }
//     if (empty($_POST['re_password']) == TRUE) {
//         $errors['re_password'] = "Harap Mengisi ulang password";
//     }
//     var_dump($errors);


//     //insert
//     $email = htmlspecialchars($_POST['email']);
//     $password = htmlspecialchars($_POST['password']);
//     $re_password = htmlspecialchars($_POST['re_password']);

//     // var_dump($_POST);
// }



?>


<div class="container mt6">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-600 mb-4">Gabung Jadi Member Travelokapala !</h5>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="">Email</label>
                            <input type="text" id="email" class="form-control is-invalid" name="email" autocomplete="off" placeholder="example@gmail.com">
                            <div class="invalid-feedback"><?= $errors['email'] ?? ''; ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="pw" class="form-label ">Password</label>
                            <input type="password" id="pw" name="password" class="form-control is-invalid">
                            <div class="invalid-feedback"><?= $errors['password'] ?? ''; ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="pww" class="form-label ">Confirm Password</label>
                            <input type="password" id="pww" name="re_password" class="form-control is-invalid">
                            <div class="invalid-feedback"><?= $errors['re_password'] ?? ''; ?></div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Daftar</button>
                        <p class="text-center fs-sm">Already have an account? <a class="text-decoration-none" href="index.php?page=login">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>