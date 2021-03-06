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
            <div class="module-head">
                <h3>Quản lý sản phẩm</h3>
            </div>
            <div class="module-body table">
                <br>
                <table cellpadding="0" cellspacing="0" border="0"
                    class="datatable-1 table table-bordered table-striped	 display" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> Tên loại sản phẩm</th>
                            <th colspan="2"><button id="add"><i class="fa fa-plus-square" aria-hidden="true"></i></button></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $cate)
                        <tr>
                            <td>{{$cate->id}}</td>
                            <td>{{$cate->name}}</td>
                            <td>
                                <form action="/admin/category/delete/{{$cate->id}}" method="POST" role="form">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" >
                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="get">
                                    <button class="edit">
                                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
            <div id="create" style="display:none">
                <form action="/admin/category" method="POST" role="form">
                    @csrf 
                    <legend>Thêm loại sản phẩm</legend>
                    <div class="form-group">
                        <label for="">Tên loại sản phẩm</label></label>
                        <input type="text" class="form-control" id="" name="name" style="width:50%">
                    </div>   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>   
            </div>
           
        <script language="javascript">
 
            document.getElementById("add").onclick = function () {
                document.getElementById("create").style.display = 'block';
            }; 
          
        </script>
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