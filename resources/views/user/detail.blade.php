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
    <div class="container">
        <p>Home>Detail>{{$item->name}}</p>
        <hr>
        <br>
        <div class="row">
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <div class="image">
                    <img style="width:90%;height:90%;" src="/storage/{{$item->image}}" alt="">
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <h6>{{$item->name}}</h6>
                <p>Trạng thái:
                    @if($item->status!="null")
                    <span>{{$item->status}}/</span>
                    @endif
                    @if($item->quantity==5)
                    <span> Còn hàng</span>
                    @elseif ($item->quantity>0)
                    <span>Sắp hết hàng</span>
                    @else <span> Hết hàng</span>
                    @endif </p>

                <h4>{{$item->price}}đ</h4>
                <form action="" method="get">
                    <button style="color:white;background-color:black;width:100%;text-align:center">Mua ngay</button>
                </form>
                <p>Thông tin sản phẩm</p>
                <ul>
                    <li>Kích cỡ:{{$item->size}} </li>
                    <li>Kiểu dáng:{{$item->design}} </li>
                    <li>Mô tả:{{$item->description}} </li>
                </ul>
            </div>
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