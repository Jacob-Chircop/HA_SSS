@extends('layouts.main')

@section('content')

<main class="py-5">
    <div class="card-body">
        <h2>Add Student</h2>
        <form action="{{ route('students.createstore') }}" method="POST">
            @csrf
            @include('students._createForm')
        </form>
    </div>
</main>

@endsection