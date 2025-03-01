<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students</title>
</head>
<body>
    <div class="container">
        <h1>List of Students</h1>

        <!-- College Filter Form -->
        <div class="row">
            <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <form method="GET" action="{{ route('students.index') }}">
                                    <select id="filter_college_id" name="college_id" class="custom-select" onchange="this.form.submit()">
                                        @foreach($colleges as $id => $name)
                                            <option {{ $id == request('college_id') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Students Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>College</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->college->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
