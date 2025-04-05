@extends('layouts.main')

@section('content')

<main class="py-4">
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">
            <h2 class="mb-4 fw-bold">Edit College</h2>

            <form action="{{ route('colleges.editstore', $College->id) }}" method="POST">
                @csrf
                @include('colleges._editForm')
            </form>
        </div>
    </div>
</main>

@endsection