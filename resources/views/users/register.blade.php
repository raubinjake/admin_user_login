<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    

<link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
rel='stylesheet'>
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >
    </script>
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>
<style>
 .container {
  font-family: arial;
  font-size: 24px;
  margin: 25px;
  width: 550px;
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
    <form method="POST" action="{{url('/user_register')}}" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">First name</label><br>
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Last name</label><br>
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Date of birth</label><br>
        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" autocomplete="off">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Phone number</label><br>
        <input type="text" class="form-control" id="phone_number" name="phone" placeholder="Phone number">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label><br>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label><br>
        <input type="password" class="form-control" id="password" rows="3"></textarea>
      </div>
      <div>
        <label for="vehicle1"> Hobbies</label><br>
        Listen music: 
        <input type="checkbox" id="hobbies" name="hobbies" value="1">
        Reading book: 
        <input type="checkbox" name="hobbies" value="2">
        Watching youTube: 
        <input type="checkbox"  name="hobbies" value="3">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Profile image</label><br>
        <input type="file" class="form-control" name="image" id="image" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{url('/')}}" class="btn btn-primary"> Login</a>
    </form> 
    
</div>
<script>
    $(document).ready(function(){


$('[type="checkbox"]').change(function(){

  if(this.checked){
     $('[type="checkbox"]').not(this).prop('checked', false);
  }    


});
$(function() {
    $( "#date_of_birth" ).datepicker();
    });
});
</script>
</body>
</html>