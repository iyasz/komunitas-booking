<?php $title = 'Register'; ?>

<div class="container mt6">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-600 mb-4">Gabung Jadi Member Travelokapala !</h5>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="">Email</label>
                            <input type="text" required id="email" class="form-control" name="email" autocomplete="off" placeholder="example@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="pw" class="form-label">Password</label>
                            <input type="password" id="pw" required name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="pww" class="form-label">Confirm Password</label>
                            <input type="password" id="pww" required name="re_password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Daftar</button>
                        <p class="text-center">Already have an account? <a class="text-decoration-none" href="index.php?page=login">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>