<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>Log In | JNE Terpadu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="shortcut icon" href="{{ url('public') }}/logo-1.png">

    <link href="{{ url('public') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page card-bg">

    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12">
                <div class="card-body p-0">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 col-xl-3 col-lg-4">
                            <div class="card mb-0 border-0">
                                <div class="card-body p-0">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="{{ url('public') }}/logo-1.png" height="50" alt="logo"
                                                class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold font-18">
                                            Selamat Datang Di Sistem JNE Terpadu
                                        </h4>
                                        <p class="text-muted  mb-0">
                                            Silahkan Login
                                        </p>
                                    </div>
                                </div>
                                @if (isset($message))
                                    <div class="alert alert-danger text-center">{{ $message }}</div>
                                @endif
                                <div class="card-body pt-0">
                                    <form class="my-4" action="{{ url('login') }}" method="post">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" name="userid"
                                                placeholder="Enter username">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Enter password">
                                        </div>



                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Log In
                                                        <i class="fas fa-sign-in-alt ms-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xl-9 col-lg-8  p-0 vh-100 d-flex justify-content-center auth-bg">
                            <div class="accountbg d-flex align-items-center">
                                <div class="account-title text-center text-white">
                                    <img src="{{ url('public') }}/logo-1.png" alt="" class="thumb-lg"
                                        style="width: 80%; height: 50%;">
                                    <h1 class="mt-3 text-white">Selamat Datang di <span class="text-warning">Sistem JNE
                                            Terpadu</span>
                                    </h1>

                                    <p class="font-18 mt-3" style="width: 80%; text-align: center; margin-left: 10%">
                                        JNE merupakan singkatan dari PT Jalur Nugraha Ekakurir. Perusahaan ini merupakan
                                        salah satu perusahaan penyedia jasa pengiriman barang terbesar dengan jaringan
                                        terluas di Indonesia saat ini
                                    </p>
                                    <div class="border w-25 mx-auto border-warning"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ url('public') }}/assets/js/app.js"></script>

</body>

</html>
