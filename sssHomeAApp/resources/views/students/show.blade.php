@extends('layouts.main')

@section('content')

    <main class="py-5">
        <h2>Show Student</h2>
        <div>
            <label for="name" class="col-md-3 col-form-label">Name:</label>
            <p class="form-control-plaintext text-muted">{{ $student->name }}</p>
        </div>

        <div>
            <label for="email" class="col-md-3 col-form-label">Email:</label>
            <p class="form-control-plaintext text-muted">{{ $student->email }}</p>
        </div>

        <div>
            <label for="phone" class="col-md-3 col-form-label">Phone:</label>
            <p class="form-control-plaintext text-muted">{{ $student->phone }}</p>
        </div>

        <div>
            <label for="dob" class="col-md-3 col-form-label">Date of Birth:</label>
            <p class="form-control-plaintext text-muted">{{ $student->dob }}</p>
        </div>

        <div>
            <label for="college_id" class="col-md-3 col-form-label">College:</label>
            <p class="form-control-plaintext text-muted">{{ $student->college->name }}</p>
        </div>
    </main>
@endsection
