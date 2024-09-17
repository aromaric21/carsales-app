<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body{
            margin:0px;
            padding:0px;
        }

        .navbar-brand{
            padding-left: 2rem;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"><h4 style="color: black">Car Sales System</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="#">Brand</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Model</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Car</a>
      </li>
    </ul>
  </div>
</nav>


     @yield('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
