@extends('layout/app')
@section('content')

<div class="container">
    @if(Auth::user())
    <br>
    <h6><a href="">Trang chủ</a> > Giỏ hàng</h6>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>.</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0 ?>
                @foreach ($carts as $cart)
                <tr>
                    <td>1</td>
                    <td>{{$cart->products->name}}</td>
                    <td><img src="/storage/{{$cart->products->image}}" alt="" style="width:100px;height:100px"></td>
                    <td>{{$cart->products->price}}</td>
                    <td class="cart_quantity">
                        <a class="cart_quantity_up"
                            href='/user/cart/{{$cart->products->id}}/increment'> + </a>
                        <input type="text" name="quantity" value="{{$cart->quantity}}">
                        <a class="cart_quantity_down"
                            href='/user/cart/{{$cart->products->id}}/decrement'> - </a>

                    </td>
                    <td>
                        {{$cart->products->price*$cart->quantity}}
                        <?php $total+=$cart->products->price*$cart->quantity; ?>
                    </td>
                    <td>
                        <form action="/user/cart/{{$cart->product_id}}/{{Auth::user()->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button><i class="fa fa-remove" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table table-hover " style="width: 200px !important;position: inherit;float: right;text-size:30px">
            <thead>
                <tr>
                    <th>Thành tiền: {{$total}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tổng cộng: {{$total}}</td>
                </tr>
                <tr>
                    <td>
                        <form action="/user/order" method="get"><button>Đặt mua</button></form>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    @else
    <div>Bạn chưa đăng nhập, vui lòng đăng nhập <a href="/auth/login">Tại đây</a> để có thể mua hàng</div>
    @endif
</div>


@endsection