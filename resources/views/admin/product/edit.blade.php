<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/admin/dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        @include ("partials.sidenav")
        <div class="col-md-10">
            <form action="/admin/product/edit/{{$product->id}}" method="POST" class="form-horizontal" role="form"
                enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <legend>Thêm sản phẩm</legend>
                <div class="control-group">
                    <label class="control-lable" for="name">Tên sản phẩm</label>
                    <input type="text" class="control" name="name" id="name" value="{{$product->name}}" Required>
                </div>
                <div class="control-group">
                    <label class="control-lable" for="status">Tình trạng</label>
                    <input type="text" name="status" list="list" value="{{$product->status}}">
                    <datalist id="list">
                        <option value=""></option>
                        <option value="Hàng mới">Hàng mới</option>
                    </datalist>
                </div>
                <div class="control-group">
                    <label class="control-lable" for="cate">Loại</label>
                    <input type="text" name="cate" list="listCate" value="{{$product->category}}">
                    <datalist id="listCate">
                        <option value="Dây chuyền">Dây chuyền</option>
                        <option value="Nhẫn">Nhẫn</option>
                        <option value="Vòng tay">Vòng tay</option>
                        <option value="Bông tai">Bông tai</option>
                    </datalist>
                    <!-- <select class="control" name="cate" value="{{$product->category}}">
                        <option value="">Chọn loại</option>
                        <option value="Dây chuyền">Dây chuyền</option>
                        <option value="Nhẫn">Nhẫn</option>
                        <option value="Vòng tay">Vòng tay</option>
                        <option value="Bông tai">Bông tai</option>

                    </select> -->
                </div>
                <div class="control-group">
                    <label class="control-lable" for="price">Giá</label>
                    <input type="text" class="control" name="price" id="price" value="{{$product->price}}">
                </div>
                <div class="control-group">
                    <label class="control-lable" for="quantity">Số lượng</label>
                    <input type="text" class="control" name="quantity" id="quantity" value="{{$product->quantity}}">
                </div>
                <div class="control-group">
                    <label class="control-lable" for="desc">Mô tả</label>
                    <textarea type="text" class="control" name="desc" id="desc"
                        value="{{$product->description}}"></textarea>
                </div>
                <div class="control-group">
                    <label class="control-lable" for="size">Kích cỡ</label>
                    <input type="text" class="control" name="size" id="size" value="{{$product->size}}">
                </div>
                <div class="control-group">
                    <label class="control-lable" for="design">Kiểu dáng</label>
                    <input type="text" class="control" name="design" id="design" value="{{$product->design}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
                </div>
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