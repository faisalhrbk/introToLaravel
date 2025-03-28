<h1>registratioin form</h1>

{{-- 21 feb form validation --}}

{{-- @if ($errors->any())
@foreach ($errors->all() as $error)
<div style="color: red">
    {{ $error }}
</div>
@endforeach
@endif --}}
</div>
<form action="/addUser" method="post">
@csrf
    <input type="text" placeholder="Enter user name" name="name">
    <br>
    <span style="color: red">@error('name'){{ $message }}@enderror</span>
    <br>
  <input type="text" placeholder="Enter user email" name="email">
 <br>
 <span style="color: red">@error('email'){{ $message }}@enderror</span>
    <br>
<input type="text" placeholder="enter your city" name="city"> <br>
    <span style="color: red">@error('city'){{ $message }}@enderror</span>
<br>
<input type="submit" value="submit">

</form>
<a href={{route("page2")}}>go to pratice 2</a>

<a href="{{URL::to('/page2')}}"></a>

<a href="{{URL::to('page2', ["about"])}}">page2 about</a>