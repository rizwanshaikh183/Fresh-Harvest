<?php
session_start();

if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "you already loggeed in";
    header('Location: index.php');
}
include ('includes/header.php');
?>
<?php
include('includes/navbar.php');;
    ?>

<!-- Registration 8 - Bootstrap Brain Component -->
<section class="bg-light p-3 p-md-4 p-xl-15">
    <div class="container"><?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?= $_SESSION['message']; ?>
                <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            unset($_SESSION['message']);
    }
    ?>
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-11">
                <div class="card border-light-subtle shadow-sm">
                    <div class="row g-0">
                        <div class="col-12 col-md-6">
                            <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
                                src="images/bg_1.jpg" alt="Welcome back you've been missed!">
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                            <div class="col-12 col-lg-11 col-xl-10">
                                <div class="card-body p-3 p-md-4 p-xl-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <div class="text-center mb-4">

                                                    <h2 class="h4 text-center">Login Form</h2>
                                                </div>
                                            </div>
                                        </div>

                                        <form action="functions/authcode.php" method="POST">
                                            <div class="row gy-3 overflow-hidden">
                                           
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="name@example.com" required>
                                                        <label for="email" class="form-label">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control" name="password"
                                                            id="password" value="" placeholder="Password" required>
                                                        <label for="password" class="form-label">Password</label>
                                                    </div>
                                                </div>
                                              
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="iAgree" id="iAgree" required>
                                                        <label class="form-check-label text-secondary" for="iAgree">
                                                            I agree to the <a href="#!"
                                                                class="link-primary text-decoration-none">terms and
                                                                conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-dark btn-lg" name="login_btn"
                                                            type="submit">Login</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="mb-0 mt-5 text-secondary text-center">Already have an account?
                                                    <a href="register.php" class="link-primary text-decoration-none">Sign
                                                        up</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>