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
        <form action="/admin/product" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
            @csrf
                <legend>Thêm sản phẩm</legend>
                <span style="color:green">{{Request::get('alert')}}</span>
                <div class="control-group">
                    <label class="control-lable" for="name">Tên sản phẩm</label>
                    <input type="text" class="control" name="name" id="name" value="" Required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="img">Hình ảnh</label>
                    <input id="img" name="img" class="input-file" type="file">
                </div>
                <div class="control-group">
                    <label class="control-lable" for="status">Tình trạng</label></label>
                    <select class="control" name="status">
                        <option value=""></option>
                        <option value="Dây chuyền">Hàng mới</option>                        
                    </select>
                </div>
                <div class="control-group">
                    <label class="control-lable" for="cate">Loại</label></label>
                    <select class="control" name="cate" Required>
                        <option value="">Chọn loại</option>
                        <option value="Dây chuyền">Dây chuyền</option>
                        <option value="Nhẫn">Nhẫn</option>
                        <option value="Vòng tay">Vòng tay</option>
                        <option value="Bông tai">Bông tai</option>
                        
                    </select>
                </div>
                <div class="control-group">
                    <label class="control-lable" for="price">Giá</label></label>
                    <input type="text" class="control" name="price" id="price" value="">
                </div>
                <div class="control-group">
                    <label class="control-lable" for="quantity">Số lượng</label></label>
                    <input type="text" class="control" name="quantity" id="quantity" value="">
                </div>
                <div class="control-group">
                    <label class="control-lable" for="desc">Mô tả</label>
                    <textarea type="text" class="control" name="desc" id="desc" value=""></textarea>
                </div>
                <div class="control-group">
                    <label class="control-lable" for="size">Kích cỡ</label>
                    <input type="text" class="control" name="size" id="size" value="">
                </div>
                <div class="control-group">
                    <label class="control-lable" for="design">Kiểu dáng</label>
                    <input type="text" class="control" name="design" id="design" value="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
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