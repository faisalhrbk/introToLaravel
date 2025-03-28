<h1>Edit your Details</h1>

<form action="{{ route('update', $student->id) }}" method="POST">
@csrf

<input type="text" name="name" value="{{$student->name}}" placeholder="edit your name">
<br>
<br>
<input type="text" name="email" value="{{$student->email}}" placeholder="edit your email">
<br>
<br>
<input type="text" name="batch" value="{{$student->batch}}" placeholder="edit your batch ">
<br>
<br>

<button type="submit" style="padding: 8px; background-color: rgb(93, 235, 11); color:aliceblue; border: none">Update Details</button>
<br>
<br>
<a href="/" style="padding: 4px; background-color: rgb(235, 59, 11); color:aliceblue">CANCEL</a>

</form>