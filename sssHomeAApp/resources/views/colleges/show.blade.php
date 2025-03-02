@extends('layouts.main')

@section('content')

<main class="py-5">
    <h2>Show College</h2>
        <div>
            <label class="col-md-3 col-form-label">College Name:</label>
            <p class="form-control-plaintext text-muted">{{ $College->name }}</p>
        </div>
        <div>
            <label class="col-md-3 col-form-label">College Address:</label>
            <p class="form-control-plaintext text-muted">{{ $College->address }}</p>
        </div>
</main>

@endsection
