<h1>Register yourself</h1>
<form action="{{route("add")}}" method="POST">
    @csrf
    <input type="text" placeholder="enter your name" name="name">
    <input type="email" placeholder="enter you email" name="email">
    <input type="text" placeholder="enter you batch" name="batch">
    <button type="submit">Register</button>
</form>

<h4>SEARCH STUDENT BY ID</h4>

<form action="{{route('search')}}" method="get">
    @csrf
    <input type="number" name="id" placeholder="enter id ">
    <button type="submit">Search</button>
</form>
@if(isset($studentFound))
    <h3>Student Found</h3>
    <ul>
        <li>ID: {{ $studentFound->id }}</li>
        <li>Name: {{ $studentFound->name }}</li>
        <li>Email: {{ $studentFound->email }}</li>
        <li>Batch: {{ $studentFound->batch }}</li>
    </ul>
    <a href="/">view list</a>
@endif


<br>
<br>




@if (isset($studentData))
<h2>student list</h2>
    <ul>
        @foreach ($studentData as $student)
        <form action="{{route('delete')}}" method="POST">
            @csrf
            <li><input type="checkbox" name="ids[]" value="{{$student->id}}"></li>
            <li>
                {{$student->id}}
            </li>
            <li>
                {{$student->name}}
            </li>
            <li>
                {{$student->email}}
            </li>
            <li>
                {{$student->batch}}
            </li>

    
            <a href="{{ route('delete', $student->id) }}">Delete</a>
            <a href="{{ route('edit', $student->id) }}">Edit</a>
            <br>
            <br>


        @endforeach
        <button style="padding: 10px; color:rgb(198, 220, 240); background-color: rgba(250, 18, 18, 0.823); border:none; cursor:pointer">Delete Checked students</button>
    </form>
    </ul>
    {{$studentData->links()}}
    <style>
        .w-5.h-5{
            width: 10px;
            height: 10px
        }
    </style>
@endif
    
