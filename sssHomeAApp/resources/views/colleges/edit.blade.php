@extends('layouts.main')

@section('content')

<main class="py-5">
    <div class="card-body">
        <h2>Edit College</h2>
        <form action="{{ route('colleges.editstore', $College->id) }}" method="POST">
            @csrf
            @include('colleges._editForm')
            
        </form>
    </div>
</main>

@endsection