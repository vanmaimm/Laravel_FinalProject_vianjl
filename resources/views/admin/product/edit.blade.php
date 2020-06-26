<!doctype html>
<html lang="en">

<head>
    <title>Edit product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/admin/dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    input,
    select,
    textarea {
        width: 500px;
    }

    table {}

    table tr {
        margin-top: 100px;
        padding-top: 100px;
    }

    form {
        margin-left: 10%;
    }
    </style>
</head>

<body>
    <div class="row">
        @include ("partials.sidenav")
        <div class="col-md-10">
            <form action="/admin/product/edit/{{$product->id}}" method="POST" class="form-horizontal" role="form"
                enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <h4>Chỉnh sửa sản phẩm</h4>
                <br><br>
                <table class="xtable">
                    <tr>
                        <td> <label class="control-lable" for="name">Tên sản phẩm</label></td>
                        <td><input type="text" class="control" name="name" id="name" value="{{$product->name}}"
                                Required></td>
                    </tr>
                    <tr>
                        <td><label class="control-label" for="img">Hình ảnh</label></td>
                        <td><input id="img" name="img" class="input-file" type="file"></td>
                    </tr>
                    <tr>
                        <td> <label class="control-lable" for="status">Tình trạng</label></label></td>
                        <td> <select class="control" name="status">
                                <option value="null"></option>
                                <option value="null"
                                @if ($product->status=='null')
                                    selected
                                @endif
                                 >Không có</option>
                                <option value="New" 
                                 @if ($product->status=='New')
                                    selected
                                @endif>Hàng mới</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label class="control-lable" for="cate">Loại</label></td>
                        <td><select class="control" name="cate" Required>
                                <option value="">Chọn loại</option>
                                @foreach($cates as $cate)
                                @if ($cate->id==$product->cate_id)
                                <option value="{{$cate->id}}" selected>{{$cate->name}}</option>
                                @else
                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endif
                                @endforeach
                            </select></td>
                    </tr>
                    <tr>
                        <td> <label class="control-lable" for="price">Giá</label></label></td>
                        <td> <input type="text" class="control" name="price" id="price" value="{{$product->price}}"></td>
                    </tr>
                    <tr>
                        <td> <label class="control-lable" for="quantity">Số lượng</label></td>
                        <td> <input type="text" class="control" name="quantity" id="quantity" value="{{$product->quantity}}"></td>
                    </tr>
                    <tr>
                        <td> <label class="control-lable" for="desc">Mô tả</label>
                        </td>
                        <td> <textarea type="text" class="control" name="desc" id="desc" value="{{$product->description}}"></textarea></td>
                    </tr>
                    <tr>
                        <td><label class="control-lable" for="design">Kiểu dáng</label>
                        </td>
                        <td><input type="text" class="control" name="design" id="design" value="{{$product->design}}"></td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button></td>

                    </tr>
                    @if (count($errors) > 0)
                    <div class="error-message" style="color:red">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </table>
            </form>
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