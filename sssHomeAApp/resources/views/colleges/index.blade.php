@extends('layouts.main')

@section('content')

<main class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-title">
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0">All Colleges</h2>
                            <div class="ml-auto">
                                <a href="{{ route('colleges.create') }}" class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Add New
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($colleges->count())
                                    @foreach ($colleges as $index => $college)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>{{ $college->name }}</td>
                                            <td>{{ $college->address }}</td>
                                            <td width="150">
                                                <a href="{{ route('colleges.show', $college->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="View"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('colleges.destroy', $college->id) }}" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">No colleges found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
