@extends('layouts.main')

@section('content')

<main class="py-5">
    <div class="card-body">
        <h2>Edit Student</h2>
        <form action="{{ route('students.editstore', $student->id) }}" method="POST">
            @csrf
            @include('students._editForm')
        </form>
    </div>

</main>

@endsection