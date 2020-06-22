<!doctype html>
<html lang="en">

<head>
    <title>Rgister</title>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="/css/auth/register.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/partials/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    @include("partials.header")

    <div class="container">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h2 class="card-title">Register form</h2>
                <form action="/auth/register" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="username" id="username" class="form-control" value=""
                            required="required" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <input type="text" name="password" id="password" class="form-control" value=""
                            required="required" placeholder="Password">
                    </div>
                    <div class="input-group">
                        <input type="text" name="name" id="name" class="form-control" value="" required="required"
                            placeholder="Full name">
                    </div>
                    <div class="input-group">
                        <input type="text" name="phone" id="phone" class="form-control" value="" required="required"
                            placeholder="Phone number">
                    </div>
                    <div class="input-group">
                        <input type="text" name="address" id="address" class="form-control" value="" required="required"
                            placeholder="Address">
                    </div>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
    @include("partials.footer")
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