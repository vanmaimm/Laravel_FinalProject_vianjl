@extends('layout/app')
@section('content')

<div class="container">
    <h4>Trang chu > {{$catePro->name}}</h4>
    <div class="row">
        @foreach($catePro->products as $item)
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card">
                <a href=""> <img class="card-img" src="/storage/{{$item->image}}" alt="Vans">
                </a>
                <div class="card-body">
                    <h4 class="card-title">{{$item->name}}</h4>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <div class="buy d-flex justify-content-between align-items-center">
                        <div class="price text-success">
                            <h5 class="mt-4">{{$item->price}} đ</h5>
                        </div>
                        <a href="/user/cart/{{$item->id}}" class="btn btn-danger mt-3"><i
                                class="fas fa-shopping-cart"></i> Mua hàng</a>
                    </div>
                </div>
            </div>
            <br>
        </div>
        @endforeach
    </div>
</div>


@endsection