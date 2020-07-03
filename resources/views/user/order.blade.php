<!doctype html>
<html lang="en">

<head>
    <title>Order</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    input {
        width: 100%;
    }

    table tr {
        height: 50px;
    }

    .note {
        color: red;
    }
    </style>
</head>

<body>


    <div class="container">
        <form action="/order" method="post">
            <div class="row">
                @csrf
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h1>ViAnJL</h1>
                    <hr>
                    <span><a href="/user/cart">Giỏ hàng</a> > Thông tin đặt mua</span>
                    <hr>
                    <h6>Thông tin mua hàng</h6>

                    <table style='width:100%'>
                        <tr>
                            <td colspan="2"><b> Họ và tên <span class="note">(*)</span></b></td>
                            <td colspan="2"><input type="text" name="name" value="{{$user->name}}" require></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Địa chỉ <span class="note">(*)</span></b></td>
                            <td colspan="2"><input type="text" name="address" value="{{$user->address}}" require></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Số điện thoại <span class="note">(*)</span></b></td>
                            <td colspan="2"><input type="text" name="phone" value="{{$user->phone_number}}" require>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2><b>Phương thức vận chuyển </b></td>
                            <td colspan=2>Miễn phí giao hàng toàn quốc</td>
                        </tr>
                        <tr>
                            <td colspan=2><b>Phương thức thanh toán </b></td>
                            <td colspan=2>Thanh toán khi nhận hàng(COD)</td>
                        </tr>
                        <tr>
                            <td colspan=4>
                                <hr>
                            </td>
                        </tr>


                    </table>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total=0?>
                            @foreach ($pros as $pro)
                            <tr>
                                <td>1</td>
                                <td>{{$pro->products->name}}</td>
                                <td>{{$pro->quantity}}</td>
                                <td>{{$pro->products->price}}</td>
                                <td>{{$pro->quantity*$pro->products->price}}</td>
                                <?php $total+=$pro->quantity*$pro->products->price?>
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="4"><b> Tạm tính:</b></td>
                                <td colspan="1">{{$total}}</td>
                            </tr>

                            <tr>
                                <td colspan="4"><b> Tổng cộng:</b></td>
                                <td colspan="1">
                                    <input type="hidden" name="total" value={{$total}} hidden>
                                    {{$total}}
                                </td>
                            </tr>
                            <!-- <tr>
                                <td colspan="2"><b>Mã giảm giá</b> </td>
                                <td colspan="2"><input type="text" name="mgg" id='mgg'></td>
                                <td colspan="2"><input type="button" onclick="abc()" id="amgg" value="Áp dụng"></td>
                            </tr> -->
                            <tr>
                                <td colspan=2><b></b></td>
                                <td colspan=3><button style='width:100%'>Hoàn tất đơn hàng</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
        <!-- <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <table>
                    <tr>
                        <form action="" method="get" style="display:none">
                            <td colspan="2"><b>Mã giảm giá</b> </td>
                            <td colspan="2"><input type="text" name="mgg" id="mgg"></td>
                            <td colspan="2"><button>Áp dụng</button> </td>
                        </form>
                    </tr>
                </table>
            </div>

        </div> -->

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