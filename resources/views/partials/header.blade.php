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
                    <span style="border-right:solid black;border-width: 1px; padding-right:5px"> {{Auth::user()->name}}</span>
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
                        <div class="search-bar">
                            <div class="enter">
                                <input type="text" name="search" id="input" class="form-control" value=""
                                    required="required" title="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="cart">
                            <a href="">Giỏ hàng <i class="fa fa-shopping-cart" aria-hidden="true"></i> (0)</a>
                        </div>
                    </div>
                </div>

                <div class="navbar1">
                    <a href="/home">Trang chủ</a>
                    <a href="#home">Sản phẩm mới</a>
                    <div class="subnav">
                        <a class="subnavbtn" href="#bring">Vòng tay <i class="fa fa-caret-down"></i></a>
                        <div class="subnav-content">
                            <a href="#bring"></a>
                            <a href="#deliver">Bông tai</a>
                            <a href="#package">Package</a>
                            <a href="#express">Express</a>
                        </div>
                    </div>
                    <div class="subnav">
                        <a class="subnavbtn" href="#bring">Dây chuyền <i class="fa fa-caret-down"></i></a>
                        <div class="subnav-content">
                            <a href="#link1">Link 1</a>
                            <a href="#link2">Link 2</a>
                            <a href="#link3">Link 3</a>
                            <a href="#link4">Link 4</a>
                        </div>
                    </div>
                    <div class="subnav">
                        <a class="subnavbtn" href="#bring">Bông tai <i class="fa fa-caret-down"></i></a>
                        <div class="subnav-content">
                            <a href="#link1">Link 1</a>
                            <a href="#link2">Link 2</a>
                            <a href="#link3">Link 3</a>
                            <a href="#link4">Link 4</a>
                        </div>
                    </div>
                    <div class="subnav">
                        <a class="subnavbtn" href="#bring">Nhẫn <i class="fa fa-caret-down"></i></a>
                        <div class="subnav-content">
                            <a href="#link1">Link 1</a>
                            <a href="#link2">Link 2</a>
                            <a href="#link3">Link 3</a>
                            <a href="#link4">Link 4</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>