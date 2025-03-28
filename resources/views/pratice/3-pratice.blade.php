{{-- <h3>dynamo</h3>

{{-- <h1>dummy page to show</h1> --}}

{{-- <h2>sessions data go here</h2>
<h1>profile page</h1>

{{session()->get("name")}} --}}

<h1> add new user</h1>
{{session("message")}}

<form action="{{route("flash")}}" method="post">
@csrf
    <input type="text" name="username" placeholder="enter user name">
    <br>
    <input type="text" name="email" placeholder="enter user email">
    <br>
    <input type="text" name="phone" placeholder="enter user phone">
    <br>
    <input type="submit" value="submit">
</form>
