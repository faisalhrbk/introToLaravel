<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>this is page seven</h1> 
<h4>laravel http classes</h4>


   {{-- {{$users}} --}}

   <h1>
    user login 

   </h1>
{{-- 
   <form action="{{route('login')}}" method="post">
       @csrf
       <input type="email" placeholder="enter your email" name="email">
       <br>
       <input type="password" placeholder="enter your password" name="password">
       <br>
       <input type="submit" value="login">
   </form> --}}

   @if(isset($fileName) && file_exists(public_path("storage/".$fileName)))
   <img src="{{ url('storage/'.$fileName) }}" alt="Uploaded Image">
@endif
</body>
</html>