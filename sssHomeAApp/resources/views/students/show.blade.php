@extends('layouts.main')

@section('content')

<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-white border-bottom-0">
                        <h4 class="mb-0 fw-bold">Student Details</h4>
                    </div>
                    <div class="card-body">

                        <div class="mb-3 row">
                            <label for="name" class="col-md-3 col-form-label fw-semibold">Name:</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted">{{ $student->name }}</p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-md-3 col-form-label fw-semibold">Email:</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted">{{ $student->email }}</p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="phone" class="col-md-3 col-form-label fw-semibold">Phone:</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted">{{ $student->phone }}</p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="dob" class="col-md-3 col-form-label fw-semibold">Date of Birth:</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted">{{ $student->dob }}</p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="college_id" class="col-md-3 col-form-label fw-semibold">College:</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted">{{ $student->college->name }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
