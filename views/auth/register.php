<?php

// echo $_POST['email'];
// echo $_SERVER['REQUEST_METHOD'];



// if (empty($email) or empty($password) or empty($re_password)) {
// }

$errors = [
    // "email" => "Harap mengisi email",
    // "password" => "Harap mengisi password",
    // "re_password" => "Harap mengisi ulang password",
];

$olds = [];

if (isset($_POST['post_register'])) {
    // $_SERVER['REQUEST_METHOD'] == 'POST'
    $user = $conn->query("SELECT * FROM users WHERE email = '$_POST[email]'");


    //validation email
    if (empty($_POST['email']) == TRUE) {
        $errors['email'] = "Harap Mengisi Email";
        $olds['email'] = $_POST['email'];
    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == FALSE) {
        $errors['email'] = "Email Tidak Valid";
        $olds['email'] = $_POST['email'];
    } elseif (mysqli_num_rows($user) > 0) {
        $errors['email'] = "Email Sudah Digunakan";
        $olds['email'] = $_POST['email'];
    }

    //validation password
    if (empty($_POST['password']) == TRUE) {
        $errors['password'] = "Harap Mengisi password";
        $olds['email'] = $_POST['email'];
    } elseif (strlen($_POST['password']) < 6) {
        $errors['password'] = "Harap Mengisi Lebih Dari 6 Karakter";
        $olds['email'] = $_POST['email'];
    }

    //validation Re Password
    if (empty($_POST['re_password']) == TRUE) {
        $errors['re_password'] = "Harap Mengisi ulang password";
        $olds['email'] = $_POST['email'];
    } elseif ($_POST['password'] != $_POST['re_password']) {
        $errors['re_password'] = "Password Tidak Sama";
        $olds['email'] = $_POST['email'];
    }


    //insert
    if (empty($errors)) {
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email_token = md5(mt_rand());
        $expired_token = time() + (60 * 30);

        $subject = "Email Verification | Traveloka";
        $message = "
        Selamat Datang Di Traveloka :3 <br><br>
        Silahkan klik tautan dibawah ini untuk verifikasi akun kamu <br><br>
        " . base_url() . "index.php?page=email_verify&token=" . $email_token;

        $send = send_email("noreply@travelooka.com", "Traveloka", $email, $subject, $message);

        if ($send == TRUE) {
            $simpan = mysqli_query($conn, "INSERT INTO users (email,password, email_token,expired_token) VALUES('$email', '$password', '$email_token', '$expired_token')");

            set_alert("alert_success", "Registrasi Berhasil SIlahkan cek email anda untuk melakukan verifikasi!");
            echo "<script>location.replace('index.php?page=login');</script>";
            exit;
        } else {
            set_alert("alert_error", "Server sedang bermasalah, Silahkan lakukan pendaftaran ulang.");
            echo "<script>location.replace('index.php?page=register');</script>";
            exit;
        }
    }
}



?>


<div class="container mt6">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-600 mb-4">Gabung Jadi Member Travelokapala !</h5>
                    <?php show_alert() ?>
                    <form action="" method="post">
                        <div class="h-a">
                            <label for="email" class="">Email</label>
                            <input type="text" id="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" name="email" autocomplete="off" placeholder="example@gmail.com" value="<?= $olds['email'] ?? ''; ?>">
                            <div class="invalid-feedback"><?= $errors['email'] ?? ''; ?></div>
                        </div>
                        <div class="h-a">
                            <label for="pw" class="">Password</label>
                            <input type="password" id="pw" name="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback"><?= $errors['password'] ?? ''; ?></div>
                        </div>
                        <div class="h-a">
                            <label for="pww" class="">Confirm Password</label>
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