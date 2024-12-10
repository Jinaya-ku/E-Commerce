@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center" 
                         style="width: 120px; height: 120px; margin: auto;">
                        <h1 class="text-white">UN</h1>
                    </div>
                    <h4 class="mt-3">Name</h4>
                    <p class="text-muted">User Name</p>
                </div>
                <div class="col-md-8">
                    <h5>Personal Information</h5>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <strong>Email:</strong>
                        </div>
                        <div class="col-md-8">
                            john.doe@example.com
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary">Edit Profile</button>
                        <button class="btn btn-danger">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection