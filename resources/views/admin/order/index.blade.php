<!doctype html>
<html lang="en">

<head>
    <title>Order</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/admin/dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        @include ("partials.sidenav")
        <div class="col-md-10">
            <div class="module-head">
                <h3>Quản lý đặt hàng</h3>
            </div>
            <div class="module-body table">
                <br>
                <table cellpadding="0" cellspacing="0" border="0"
                    class="datatable-1 table table-bordered table-striped	 display" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> Tên Khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Đơn hàng</th>
                            <th>Phương thức thanh toán</th>
                            <th>Phí giao hàng</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                            <th colspan="2">Chi tiết đơn hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $count=0;
                    ?>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{++$count}}</td>
                            <td>{{$order->customer_name}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->phone_number}}</td>
                            <td>
                                @foreach ($order->detail as $product)
                                <div>
                                    <div>
                                        <b> {{$product->product_name}}</b>
                                    </div>
                                    <img src="/storage/{{$product->image}}" alt="" style="width:50px">
                                    <span>Sl: {{$product->quantity}}</span>
                                </div>
                                @endforeach
                            </td>
                            <td>{{$order->payment}}</td>
                            <td>{{$order->transport_fee}}</td>
                            <td>{{$order->total}}</td>
                            <td>
                                <button type="button" class="btn btn-danger">{{$order->status}}</button>
                            </td>
                            <td>
                                <!-- <button><i class="fa fa-eye" aria-hidden="true"></i></button> -->
                                
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#order_{{$order->id}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="order_{{$order->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                              
                                              <table class="table">
                                                  <thead style='background-color:pink'>
                                                      <tr>
                                                          <th>Tên sản phẩm</th>
                                                          <th>Hình ảnh</th>
                                                          <th>Số lượng</th>
                                                          <th>Giá</th>
                                                          <th>Thành tiền</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                  <?php $total=0 ?>
                                                  @foreach ($order->detail as $product)
                                                      <tr>
                                                          <td> {{$product->product_name}}</td>
                                                          <td> <img src="/storage/{{$product->image}}" alt="" style="width:50px"></td>
                                                          <td> {{$product->quantity}}</td>
                                                          <td> {{$product->price}}</td>
                                                          <td> {{$product->price*$product->quantity}}</td>
                                                          <?php $total+= $product->price*$product->quantity?>
                                                      </tr>
                                                    @endforeach
                                                    <tr>
                                                    <td></td>
                                                        <td colspan="3"><b>Tổng tiền:</b>  </td>
                                                        <td > {{$total}} </td>
                                                    </tr>
                                                  </tbody>
                                              </table>
                                              
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
    <script src="/js/admin/dashboard.js"></script>
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