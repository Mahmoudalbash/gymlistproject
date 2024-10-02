<!DOCTYPE html>
<html>
<style>




</style>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Show excercise</title>
</head>
<body>
<div class="w-full h-full bg-no-repeat bg-cover"
     style="background-image: url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Z3ltfGVufDB8fDB8fHww');">
<h1 class="text-red-700">Exercise: {{ $exercise->name }} - {{ $exercise->tool }} - {{ $exercise->resttime }}</h1>


<br>

<div class=" text-red-950"  >

    <form action="{{ route('exercises.destroy', $exercise->id) }}"  method="post">
        @csrf
        @method('DELETE')
        <button class="rounded-none ..." type="submit" > Delete</button>
    </form>
</div>

<a class="text-green-400" href="{{ route('exercises.edit',['exercise'=>$id]) }}">Edit Exercise</a>


<a  class="text-yellow-300" href="{{ route('exercises.index') }}">Back to List</a>
</div>
</body>


</html>
