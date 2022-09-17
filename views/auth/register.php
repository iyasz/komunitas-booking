<?php

// echo $_POST['email'];
// echo $_SERVER['REQUEST_METHOD'];

$error = [];


// if (empty($email) or empty($password) or empty($re_password)) {
// }

$errors = [
    // "email" => "Harap mengisi email",
    // "password" => "Harap mengisi password",
    // "re_password" => "Harap mengisi ulang password",
];


if (isset($_POST['post_register'])) {
    // $_SERVER['REQUEST_METHOD'] == 'POST'
    $user = $conn->query("SELECT * FROM users WHERE email = '$_POST[email]'");
    var_dump($user);
    die;

    //validation
    if (empty($_POST['email']) == TRUE) {
        $errors['email'] = "Harap Mengisi Email";
    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == FALSE) {
        $errors['email'] = "Email Tidak Valid";
    } elseif (mysqli_num_rows($user) > 0) {
        $errors['email'] = "Email Sudah Digunakan";
    }

    if (empty($_POST['password']) == TRUE) {
        $errors['password'] = "Harap Mengisi password";
    } elseif (strlen($_POST['password']) < 6) {
        $errors['password'] = "Harap Mengisi Lebih Dari 6 Karakter";
    }

    if (empty($_POST['re_password']) == TRUE) {
        $errors['re_password'] = "Harap Mengisi ulang password";
    } elseif ($_POST['password'] != $_POST['re_password']) {
        $errors['re_password'] = "Password Tidak Sama";
    }


    //insert
    if (empty($errors)) {
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $simpan = mysqli_query($conn, "INSERT INTO users (email,password) VALUES('$email', '$password')");
    }
}



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
                            <input type="text" id="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" name="email" autocomplete="off" placeholder="example@gmail.com">
                            <div class="invalid-feedback"><?= $errors['email'] ?? ''; ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="pw" class="form-label ">Password</label>
                            <input type="password" id="pw" name="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback"><?= $errors['password'] ?? ''; ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="pww" class="form-label ">Confirm Password</label>
                            <input type="password" id="pww" name="re_password" class="form-control <?= isset($errors['re_password']) ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback"><?= $errors['re_password'] ?? ''; ?></div>
                        </div>
                        <button type="submit" name="post_register" class="btn btn-primary mb-3 w-100">Daftar</button>
                        <p class="text-center fs-sm">Already have an account? <a class="text-decoration-none" href="index.php?page=login">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>