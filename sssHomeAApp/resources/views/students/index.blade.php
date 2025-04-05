@extends('layouts.main')

@section('content')

<main class="py-4">
    <div class="container">
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-header bg-white border-bottom-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-0 fw-bold">All Students</h2>
                    <a href="{{ route('students.create') }}" class="btn btn-success">
                        <i class="fa fa-plus-circle"></i> Add New
                    </a>
                </div>
            </div>
            <div class="card-body">

                @include('students._filter')
                @include('students._sort')

                @if (session('message'))
                    <div class="alert alert-success mt-3">{{ session('message') }}</div>
                @endif

                <table class="table table-striped table-hover align-middle mt-3">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>College</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($students->count())
                            @foreach ($students as $index => $student)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->college->name }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('students.show', $student->id) }}"
                                           class="btn btn-sm btn-outline-info me-1" title="View">
                                           <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('students.edit', $student->id) }}"
                                           class="btn btn-sm btn-outline-secondary me-1" title="Edit">
                                           <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('students.destroy', $student->id) }}"
                                           class="btn btn-sm btn-outline-danger" title="Delete"
                                           onclick="return confirm('Are you sure?')">
                                           <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">No students found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</main>

@endsection
