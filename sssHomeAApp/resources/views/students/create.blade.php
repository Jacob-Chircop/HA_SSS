@extends('layouts.main')

@section('content')

<main class="py-4">
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">
            <h2 class="mb-4 fw-bold">Add Student</h2>
            <form action="{{ route('students.createstore') }}" method="POST">
                @csrf
                @include('students._createForm')
            </form>
        </div>
    </div>
</main>

@endsection