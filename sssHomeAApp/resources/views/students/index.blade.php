@extends('layouts.main')

@section('content')

<main class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-title">
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0">All Students</h2>
                            <div class="ml-auto">
                                <a href="{{ route('students.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('students.index') }}" class="mb-3">
                            <div class="input-group">
                                <label for="filter_college_id" class="mr-2">Filter by College:</label>
                                <select id="filter_college_id" name="college_id" class="custom-select" onchange="this.form.submit()">
                                    @foreach($colleges as $id => $name)
                                        <option value="{{ $id }}" {{ request('college_id') == $id ? 'selected' : '' }}>
                                            {{ $name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </form>

                        @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>College</th>
                                    <th>Actions</th>
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
                                            <td width="150">
                                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="View"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('students.destroy', $student->id) }}" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
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
        </div>
    </div>
</main>

@endsection
