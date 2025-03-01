<!DOCTYPE html>
<html>
<head>
    <title>Edit College</title>
</head>
<body>
<div>
    <h2>Edit College</h2>
    <form action="{{ route('colleges.editstore', $id) }}" method="POST">
        @csrf
        <div>
            <label for="name">College Name:</label>
            <input type="text" id="name" name="name" value="{{ $College->name }}" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="{{ $College->address }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
