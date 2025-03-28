<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>{{$fullname}}</h1>
    <h1>
        we are in about page
    </h1>

    {{-- {{rand()}} --}}
   {{-- {{$myArray[1]}} --}}

   @if ($fullname === "faisal")
      <h2>this is faisal hunzai</h2>
    @else 
  <h2>this is not faisal</h2>
    @endif

    <div>
        
@for($i=0; $i<=5; $i++)
<h1> 5 times chalega </h1>
{{$i}}
@endfor
    </div>

    @foreach ($myArray as $item)
    <h5>{{$item}}</h5>
    @endforeach


</body>
</html>