<x-layout>

    <x-slot name="title">
        Home Page
    </x-slot>

    <x-slot name="main" class="main">

        <style>
            .sub-heading {
                color: #1cbe14;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .content {
                font-size: 14px;
                line-height: 1.6;
            }
        </style>
        <div>
            <h3 class="sub-heading">Subheading of Home Page</h3>
            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna vitae tortor
                ultrices hendrerit.</p>
        </div>
    </x-slot>
    <x-slot name="login">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter your password">
            </div>
            <h1 id="login"> hello world</h1>
          
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
          <button onclick="onChange()">color change</button>
    </x-slot>

</x-layout>
<script>
    const changeColor = () => {
    document.getElementById("login").style.color = "red";
}

</script>
