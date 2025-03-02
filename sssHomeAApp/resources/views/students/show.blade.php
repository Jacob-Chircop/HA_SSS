@extends('layouts.main')

@section('content')

<main class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-title">
                        <strong>Show Student</strong>
                    </div>          
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label">Name:</label>
                                    <p class="form-control-plaintext text-muted">{{ $student->name }}</p>
                                </div>
            
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label">Email:</label>
                                    <p class="form-control-plaintext text-muted">{{ $student->email }}</p>
                                </div>
            
                                <div class="form-group row">
                                    <label for="phone" class="col-md-3 col-form-label">Phone:</label>
                                    <p class="form-control-plaintext text-muted">{{ $student->phone }}</p>
                                </div>
            
                                <div class="form-group row">
                                    <label for="dob" class="col-md-3 col-form-label">Date of Birth:</label>
                                    <p class="form-control-plaintext text-muted">{{ $student->dob }}</p>
                                </div>
            
                                <div class="form-group row">
                                    <label for="college_id" class="col-md-3 col-form-label">College:</label>
                                    <p class="form-control-plaintext text-muted">{{ $student->college->name }}</p>
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

