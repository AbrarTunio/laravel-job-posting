<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row my-3 py-3 border-bottom border-primary rounded">
    <div class="col-md-6 ">
        <p class="h4 text-primary ">Welcome!, You are logged In.</p>
    </div>
    <div class="col-md-6 text-end">
        <form action="/logout" method="post">
            @csrf
            <button class="btn btn-secondary">logout</button>
        </form>
    </div>
</div> 
<div class="row justify-content-between">
    @yield('content')
</div>

<div class="row p-3 my-5 position-sticky rounded bottom-0" style="background-color: rgb(0,0,0,0.5);">
    <div class="col text-center">
        <a class="btn btn-warning" href="/jobs/create">Post a job!</a>
    </div>
</div>

</div>
</body>
</html>
