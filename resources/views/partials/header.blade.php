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
                    <a style="border-right:solid black;border-width: 1px; padding-right:5px" href="/user/information">
                        {{Auth::user()->username}}</a>
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
                                <input type="text"  id="" placeholder="Tìm kiếm sản phẩm" name='key'>     
                            <button type="submit" id="searchSubmit" ><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <div class="cart">
                            <a href="/user/cart">Giỏ hàng <i class="fa fa-shopping-cart" aria-hidden="true"></i> (
                                @if (Auth::user())
                                0
                                @else
                                0
                                @endif
                                )</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class='row'>
            <div class="navbar1">
                <a href="/home">Trang chủ</a>
                @foreach ($categories as $cate)
                <div class="subnav">
                    <a class="subnavbtn" href="/home/{{$cate->name}}/{{$cate->id}}">{{$cate->name}} <i
                            class="fa fa-caret-down"></i></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>