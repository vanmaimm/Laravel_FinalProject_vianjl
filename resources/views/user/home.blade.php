<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/partials/header.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .my_title {
        float: left;
        width: 100%;
        text-align: center;
        position: relative;
        margin-top: 35px;
        margin-bottom: 35px;
    }

    .my_title .center_t {
        display: inline-block;
    }

    .my_title .left_t {
        width: 38px;
        height: 42px;
        float: left;
    }

    .my_title .title_t {
        float: left;
        height: 42px;
        background: #ffffff;
        position: relative;
        z-index: 1;
    }

    .my_title .right_t {
        background: url(../images/right_line.png) no-repeat;
        width: 38px;
        height: 42px;
        float: left;
    }

    .my_title .line_t {
        height: 2px;
        width: 100%;
        background: #dddddd;
        position: absolute;
        top: 21px;
    }
    </style>
</head>

<body>
    @include("partials.header")
    @include("partials.image")
    <div class="container">
        <br>
        <div class="row">
            @foreach($topProducts as $item)
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card">
                    <a href="">
                        <img class="card-img" src="/storage/{{$item->image}}" alt="Vans">
                    </a>
                </div>
                <div class="card-body">
                    <div style=""><span style="text-align:center;margin:auto">{{$item->name}}</span></div>
                    <form action="/home/{{$item->name}}/{{$item->id}}" method="GET"><button>Chi tiết</button></form>
                </div>
            </div>
            @endforeach
        </div>

        @foreach ($categories as $cate)
        <div class="my_title">
            <div class="center_t">
                <div class="title_t">
                    <h2>---> {{$cate->name}} <---</h2>
                </div>
            </div>
            <div class="line_t"></div>
        </div>
        <br>
        <br>
        <div class="row">
            @foreach($cate->products as $item)

            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card">
                    <a href=""> <img class="card-img" src="/storage/{{$item->image}}" alt="Vans">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">{{$item->name}}</h4>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success">
                                <h5 class="mt-4">{{$item->price}} đ</h5>
                            </div>
                            <a href="/home/cart/{{$item->id}}" class="btn btn-danger mt-3"><i
                                    class="fas fa-shopping-cart"></i> Mua hàng</a>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            @endforeach
        </div>
        @endforeach

    </div>
    <br>
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