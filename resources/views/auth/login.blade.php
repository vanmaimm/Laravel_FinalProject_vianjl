<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="/css/auth/register.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/partials/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body {
        background-image: url(/storage/public/loginimg.jpg);
    }

    .login {}

    .card {
        top: 80%;
        left: 10%;
        width: 600px;
        height: 400px;
        opacity: 1;
    }

    form {
        padding: 50px;
    }

    i {
        width: 50px;
        font-size: 48px;
    }
    </style>
</head>

<body>
    <div class="row">
        <div class="login">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title" style="margin:auto;text-align: -webkit-center;">Đăng nhập</h2>
                </div>
                <div class="card-body">

                    <form action="/auth/login" method="POST">
                        @csrf
                        <div class="input-group">
                            <i class="fa fa-user" style="font-size:40px;"></i>
                            <input type="text" name="username" id="username" class="form-control" value=""
                                required="required" placeholder="Username">
                        </div>
                        <div class="input-group">
                            <i class="fa fa-lock" style="font-size:40px;" aria-hidden="true"></i>
                            <input type="password" name="password" id="password" class="form-control" value=""
                                required="required" placeholder="Password">

                        </div><br>

                        <p style="color:red">{{Request::get('error')}}</p>

                        <div>Chưa có tài khoản: <a href="/auth/register">Đăng ký</a></div>
                        <div class="card-footer" style="padding-left:45%">
                            <button type="submit" style="text-align:center">Login</button>

                        </div>
                        @if (count($errors) > 0)
                        <div class="error-message" style="color:red">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>