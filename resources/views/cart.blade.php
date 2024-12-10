@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Your Cart</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5mPq85oI0Zeiqas4yR4PtJ0rtU21pVgOv6A&s"
                            class="img-fluid rounded-start" alt="gambar tas">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tas</h5>
                            <p class="card-text">Tas pria</p>
                            <p class="card-text"><strong>Rp.200.000, 00</strong></p>
                            <button class="btn btn-danger btn-sm">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-end">
        <h4>Total: Rp.200.000, 00</h4>
        <a class="btn btn-success" href="{{route("checkout")}}">Checkout</a>
    </div>
</div>
@endsection
