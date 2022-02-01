<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <style>
 .container {
  font-family: arial;
  font-size: 24px;
  margin: 25px;
  width: 350px;
  height: 200px;
  align-content: center;
}

p {
  /* Center horizontally*/
  text-align: center;
}
    </style>
</head>
<body>
    <div class="container">
    <form method="POST" action="{{url('/login')}}" autocomplete="off">
        @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="#" id="signup" class="btn btn-primary"> Signup</a>
    </form> 

</div>

<script>
    $('#signup').click(function(e){
        location.href = "{{url('/signup')}}";
    })
</script>
</body>
</html>