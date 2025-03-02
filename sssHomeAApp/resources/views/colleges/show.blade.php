@extends('layouts.main')

@section('content')

<main class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-title">
                        <strong>Show College</strong>
                    </div>          
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label">College Name:</label>
                                    <p class="form-control-plaintext text-muted">{{ $College->name }}</p>
                                </div>
            
                                <div class="form-group row">
                                    <label for="address" class="col-md-3 col-form-label">College Address:</label>
                                    <p class="form-control-plaintext text-muted">{{ $College->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection