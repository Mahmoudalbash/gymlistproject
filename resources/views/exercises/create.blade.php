<!DOCTYPE html>
<html>
<head>
    <title>Add New Exercise</title>
</head>
<body>
<h1>Add a New Exercise</h1>




<form action="{{ route('exercises.store') }}" method="post">
    @csrf
    <div >
        <label for="name">Name</label>
        <input type="text"  id="name" name="name" required>
    </div>
    <div >
        <label for="tool">Tool</label>
        <input  id="tool" name="tool"  required>
    </div>
    <div >
        <label for="resttime">Resttime</label>
        <input  id="rest time" name="resttime"  required>
    </div>
    <br>
    <button type="submit" >Create Song</button>
</form>




<br>
<a href="{{ route('exercises.index') }}">Back to List</a>
</body>
</html>
