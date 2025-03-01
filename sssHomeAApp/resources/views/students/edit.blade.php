<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <style>
        .invalid-feedback {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div>
    <h2>Edit Student</h2>
    <form action="{{ route('students.editstore', $student->id) }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $student->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $student->email }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ $student->phone }}" required>
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="{{ $student->dob }}" required>
            @error('dob')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="college_id">College:</label>
            <select name="college_id" id="college_id" required>
                <option value="">Select College</option>
                @foreach($colleges as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            @error('college_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div> 

        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
