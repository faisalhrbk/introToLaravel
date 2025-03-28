<h1>upload image</h1>

<form action="upload" method="POST" enctype="multipart/form-data">
@csrf
    <input type="file" name="file">
    <button >upload</button>
</form>



<h1>list of all images</h1>

@if (@isset($images))    

@foreach ($images as $image)
    <img style="height: 200px; margin: 10px" src="/storage/{{$image->path}}" alt="">
    <a href="/delete/{{$image->id}}">delete</a>
@endforeach
@endif