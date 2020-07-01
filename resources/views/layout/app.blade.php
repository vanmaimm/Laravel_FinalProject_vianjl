<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/partials/header.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div style="background: linear-gradient(to top, #ffffcc 0%, #ffffff 100%);">
        <div class="top-bar">
            <div class="container">
                <div class="top-bar_left ">
                    <span><i class="fa fa-at" aria-hidden="true"></i> favianshop.vn |</span>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> 1900 1717 71 |</span>
                    <span><i class="fa fa-envelope" aria-hidden="true"></i> vianshop@gmail.com</span>
                </div>
                <div class="top-bar_right">
                    @if(Auth::user())
                    <span style="border-right:solid black;border-width: 1px; padding-right:5px">
                        {{Auth::user()->username}}</span>
                    <a href="/auth/logout">Logout</a>
                    <!-- <form action="/auth/logout" method="get">
                        <button>Logout</button>
                    </form> -->
                    @else
                    <span style="border-right:solid black;border-width: 1px; padding-right:5px">
                        <a href="/auth/login">Login</a>
                    </span>
                    <span>
                        <a href="/auth/register"> Registers</a>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
        <hr>
        <div class="main-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h1 class="name-shop"><a href="/home">VianJl Shop</a></h1>
                    </div>
                    <div class="col-md-7">
                        <form action="/search" method="get" class="form-inline search" role="form">
                            <input type="text" id="" name='key' placeholder="Tìm kiếm sản phẩm">
                            <button type="submit" id="searchSubmit"><i class="fa fa-search"
                                    aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <div class="cart">
                            <a href="/user/cart">Giỏ hàng <i class="fa fa-shopping-cart" aria-hidden="true"></i> (0)</a>
                        </div>
                    </div>
                </div>
                <div class="navbar1">
                    <a href="/home">Trang chủ</a>
                    @foreach ($categories as $cate)
                    <div class="subnav">
                        <a class="subnavbtn" href="/home/{{$cate->name}}/{{$cate->id}}">{{$cate->name}} </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="page-footer font-small blue pt-4" style="background-color:#ffff80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">LIÊN HỆ VỚI CHÚNG TÔI</h5>
                    <p><i class="fa fa-home" aria-hidden="true"></i> 99 Tô Hiến Thành, Sơn Trà, Đà Nẵng</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Copyright: vianJl.com
        </div>
    </footer>
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