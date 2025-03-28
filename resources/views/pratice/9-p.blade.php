<div>
    <h1>upload file</h1>


    <form action="upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        <button type="submit">upload</button>
    </form>

   


</div>