<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="msapplication-tap-highlight" content="no">
    <title>Login</title>
    <!-- Disable tap highlight on IE -->
    <link rel="stylesheet" href="/news/public/assets/lib/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/news/public/assets/css/main.css"/>
    <link rel="stylesheet" href="/news/public/assets/css/site.css"/>
    <link rel="stylesheet" href="/news/public/assets/css/bootstrap4shadow.css"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <!-- CSS -->
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <script src="/news/public/assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="/news/public/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100 bg-plum-plate bg-animation">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="mx-auto app-login-box col-md-8">
                    <div class="app-logo-inverse mx-auto mb-3"></div>
                    <div class="modal-dialog w-100 mx-auto">
                        <div class="modal-content">
                            <form action="../login/CheckLogin" method="post">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome back,</div>
                                            <span>Please sign in to your account below.</span>
                                        </h4>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="email" id="email" placeholder="Email here..."
                                                       type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="pass_word" id="password"
                                                       placeholder="Password here..." type="password"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check">
                                        <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                                        <label for="exampleCheck" class="form-check-label">Keep me logged in</label>
                                    </div>
                                    <p class="text-center pt-2" style="color: #d33333">
                                        <?php
                                        if (isset($_GET['error'])) {
                                            if ($_GET['error'] == 0) {
                                                echo 'Vui lòng nhập email hoặc password';
                                            } else{
                                                echo 'Vui lòng kiểm tra lại email hoặc password';
                                            }
                                        }

                                        ?>
                                    </p>
                                    <div class="divider"></div>
                                    <h6 class="mb-0">No account? <a href="Register" class="text-primary">Sign up
                                            now</a></h6>
                                </div>
                                <div class="modal-footer clearfix">
                                    <div class="float-left">
                                        <a href="ForgotPassword" class="btn-lg btn btn-link">Recover Password</a>
                                    </div>
                                    <div class="float-right">
                                        <button class="btn btn-primary btn-lg" name="but_submit"
                                               onclick="AddSlide()">Login
                                            to Dashboard
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-center text-white opacity-8 mt-3">Copyright © ... 2020</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/news/public/assets/js/main.js"></script>
<script src="/news/public/assets/js/site.js" asp-append-version="true"></script>
</body>
</html>