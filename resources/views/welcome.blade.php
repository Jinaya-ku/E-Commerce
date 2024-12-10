@extends('layouts.app')

@section('content')
@foreach ($produks as $item)
<div class="container py-4">
    <div class="py-5">
        <div class="card" style="width: 20rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5mPq85oI0Zeiqas4yR4PtJ0rtU21pVgOv6A&s"
                class="card-img-top" alt="gambar tas">
            <div class="card-body">
                <h5 class="card-title">{{$item->nama}}</h5>
                <p class="card-text">{{$item->nama}}</p>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    <span>{{$item->harga}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
