<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="{{asset('sbadmin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="username" type="text" class="form-control form-control-user @error('username') {{ 'is-invalid'}} @enderror" id="username"
                                            placeholder="Username">
                                    </div>
                                </div>
                                @error('username')
                                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                               @enderror
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password" class="form-control form-control-user @error('password') {{ 'is-invalid'}} @enderror"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                </div>
                                @error('password')
                                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                               @enderror
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="nama_petugas" type="text" class="form-control form-control-user @error('nama_petugas') {{ 'is-invalid'}} @enderror"
                                            id="nama_petugas" placeholder="Nama Petugas">
                                    </div>
                                </div>
                                @error('nama_petugas')
                                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                               @enderror
                               <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input name="level" type="text" class="form-control form-control-user @error('level') {{ 'is-invalid'}} @enderror"
                                        id="level" placeholder="level">
                                </div>
                            </div>
                            @error('level')
                            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                           @enderror
                               <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                              </div>
                                </a>
                                <hr>
                               
                                
                            </form>
                            <hr>
                           
                           x`
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sbadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sbadmin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>