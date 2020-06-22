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
</head>

<body>
    @include("partials.header")
    @include("partials.image")
    <div class="container">
        <br>
        <div class="row">
            @foreach($topProduct as $item)
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
        </div><br>
        <h1>Hàng mới về</h1>
        <div class="row">
            @foreach($product as $item)
            @if($item->status=="New")
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
                            <a href="/home/cart/{{$item->id}}" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <h1>Bông tai</h1>
        <div class="row">
            @foreach($product as $item)
            @if($item->category=="Bông tai")
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
                            <a href="/home/cart/{{$item->id}}" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <h1>Nhẫn</h1>
        <div class="row">
            @foreach($product as $item)
            @if($item->category=="Nhẫn")
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
                            <a href="/home/cart/{{$item->id}}" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
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