<!DOCTYPE html>
<html>
<head>
    <title>Create College</title>
</head>
<body>
<div>
    <h2>Create College</h2>
    <form action="{{ route('colleges.createstore') }}" method="POST">
        @csrf
        <div>
            <label for="name">College Name:</label>
            <input type="text" id="name" name="name">


        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
