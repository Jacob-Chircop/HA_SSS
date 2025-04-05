@extends('layouts.main')

@section('content')

<main class="py-4">
    <div class="container">
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-header bg-white border-bottom-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-0 fw-bold">All Colleges</h2>
                    <a href="{{ route('colleges.create') }}" class="btn btn-success">
                        <i class="fa fa-plus-circle"></i> Add New
                    </a>
                </div>
            </div>
            <div class="card-body">

                @if (session('message'))
                    <div class="alert alert-success mt-2">{{ session('message') }}</div>
                @endif

                <table class="table table-striped table-hover align-middle mt-3">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($colleges->count())
                            @foreach ($colleges as $index => $college)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $college->name }}</td>
                                    <td>{{ $college->address }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('colleges.show', $college->id) }}"
                                           class="btn btn-sm btn-outline-info me-1" title="View">
                                           <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('colleges.edit', $college->id) }}"
                                           class="btn btn-sm btn-outline-secondary me-1" title="Edit">
                                           <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('colleges.destroy', $college->id) }}"
                                           class="btn btn-sm btn-outline-danger" title="Delete"
                                           onclick="return confirm('Are you sure?')">
                                           <i class="fa fa-times"></i>
                                        </a>
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
</main>

@endsection
