<h1>
    here are users list
</h1>
{{-- <pre>
{{ print_r($users) }}
</pre> --}}
{{-- <table>
    <tr>
        <td>name</td>
        <td>email</td>
        <td>password</td>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
    </tr>
    @endforeach
</table> --}}


{{-- @foreach ($students as $user)
<ul>
<li>{{$user->name}}</li>
<li>{{$user->email}}</li>
<li>{{$user->batch}}</li>
</ul>
@endforeach --}}

{{-- ery builders --}}

@foreach ($result as $user)
<h1>name:{{$user->name}}</h1>
<h1>email:{{$user->email}}</h1>
<h1>password:{{$user->password}}</h1>
<br>
<br>
@endforeach



