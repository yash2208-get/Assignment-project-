<!doctype html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="login_style/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    {{-- <h2 class="heading-section">Login #01</h2> --}}
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-7 col-lg-5">
                    @if ($errors->any())
                        {!! $errors->first() !!}
                    @endif
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Admin Login</h3>
                        <form action="{{ url('/') }}/login" class="login-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Username"
                                    name="email" value={{ old('email') }}>
                                <span style="color: red;">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" placeholder="Password"
                                    name="password">
                            </div>
                            <span style="color: red;">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>

                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-primary rounded submit px-3">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="login_style/js/jquery.min.js"></script>
    <script src="login_style/js/popper.js"></script>
    <script src="login_style/js/bootstrap.min.js"></script>
    <script src="login_style/js/main.js"></script>

</body>

</html>
