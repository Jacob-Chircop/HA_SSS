@extends('layouts.main')

@section('content')

<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-white border-bottom-0">
                        <h4 class="mb-0 fw-bold">College Details</h4>
                    </div>
                    <div class="card-body">

                        <div class="mb-3 row">
                            <label for="name" class="col-md-3 col-form-label fw-semibold">College Name:</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted">{{ $College->name }}</p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="address" class="col-md-3 col-form-label fw-semibold">College Address:</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted">{{ $College->address }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
