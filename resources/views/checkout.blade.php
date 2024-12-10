@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Checkout</h1>
    <div class="row">
        <!-- Order Summary -->
        <div class="col-md-6">
            <h4>Order Summary</h4>
            <ul class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tas Pria
                    <span>Rp.200.000</span>
                </li>
                <!-- Add more items here if necessary -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <strong>Total</strong>
                    <strong>Rp.200.000</strong>
                </li>
            </ul>
        </div>

        <!-- Shipping Information -->
        <div class="col-md-6">
            <h4>Shipping Information</h4>
            <form>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Shipping Address</label>
                    <textarea class="form-control" id="address" rows="3" placeholder="Enter your shipping address"></textarea>
                </div>
                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Payment Method</label>
                    <select class="form-select" id="paymentMethod">
                        <option selected>Choose...</option>
                        <option value="1">Credit Card</option>
                        <option value="2">Bank Transfer</option>
                        <option value="3">Cash on Delivery</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success w-100">Place Order</button>
            </form>
        </div>
    </div>
</div>
@endsection
