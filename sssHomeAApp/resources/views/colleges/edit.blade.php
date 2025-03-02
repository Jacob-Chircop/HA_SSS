@extends('layouts.main')

@section('content')

<main class="py-5">
    <div class="card-body">
        <h2>Edit College</h2>
        <form action="{{ route('colleges.editstore', $College->id) }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label">College Name: </label>
                <div class="col-md-9">
                    <input type="text" id="name" name="name" value="{{ $College->name }}" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-md-3 col-form-label">Address: </label>
                <div class="col-md-9">
                    <input type="text" id="address" name="address" value="{{ $College->address }}" class="form-control @error('address') is-invalid @enderror">
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</main>

@endsection