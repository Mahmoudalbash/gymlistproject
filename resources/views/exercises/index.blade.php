<!DOCTYPE html>
<html>

<head>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Exercise List</title>


</head>
<body>
<div class="w-full h-full bg-no-repeat bg-cover bg-left,"
     style="background-image: url('https://c4.wallpaperflare.com/wallpaper/81/470/394/men-weightlifting-gyms-bodybuilder-wallpaper-preview.jpg');">
    <img src="" width="614" height="570">


    <a  class="text-yellow-300" href={{ route('exercises.create') }}>Add Exercises</a>



    <ul class="italic hover:not-italic , text-orange-600">
        @foreach ($exercises as $exercise)
            <li>
                <a href="{{ route('exercises.show', $exercise->id) }}">{{ $exercise->name }} - Tool {{ $exercise->tool }} - Resttime {{ $exercise->resttime }}</a>
            </li>
        @endforeach
        <br>


    </ul>






    </div>
</body>
</html>
