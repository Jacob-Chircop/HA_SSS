@extends('layouts.main')

@section('content')

<main class="py-5">
    <div class="card-body">
        <h2>Create College</h2>
        <form action="{{ route('colleges.createstore') }}" method="POST">
            @csrf
            @include('colleges._createForm')
        </form>
    </div>
</main>

@endsection