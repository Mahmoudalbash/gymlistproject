<!DOCTYPE html>
<html>
<head>
    <title>Edit Excercise</title>
</head>
<body>

<div class="container h-100 mt-5">

    <h2>Update Exercise</h2>

    <form action="{{ route('exercises.update',$exercise->id ) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" id="name" name="name"
                   value="{{ $exercise->name }}" required>
        </div>
        <div class="form-group">
            <label for="tool">tool</label>
            <input type="text" class="form-control" id="tool" name="tool"
                   value="{{ $exercise->tool }}" required>
        </div>

        <div class="form-group">
            <label for="resttime">resttime</label>
            <input type="text" class="form-control" id="resttime" name="resttime"
                   value="{{ $exercise->resttime }}" required>
        </div>

        <button type="submit" >Update Exercise</button>
    </form>


</div>
<a href="{{ route('exercises.index') }}">Back to List</a>
</body>
</html>
