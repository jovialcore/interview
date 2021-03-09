
<!DOCTYPE html>
<html>
<head>
   <title>Employe form</title>

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>


<body>

  <div class="container">
  <br>  <p class="text-center"><b></b>
<?php if(isset($id )) {

  echo 'User id:'. $id;
}  ?>
        
 </p>
  <hr>


<div class="row justify-content-center mt-5">
<div class="col-md-6">
<div class="card">
<header class="card-header">
   <a href="" class="float-right btn btn-outline-primary mt-1">Company Name</a>
   <h4 class="card-title mt-2">Fill details below</h4>
</header>
<article class="card-body">
    @if ($errors->any()) 
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    @if (Session::has('success'))
      <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                 {{ Session('success') }}
           </div>
         @endif
<form method="post" action="/store">
   @csrf
   <div class="form-row">
      <div class="col form-group">
         <label>First name </label>   
         <input type="text" class="form-control" placeholder="" name="name">
      </div> <!-- form-group end.// -->

   <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="email" placeholder="">
      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
   </div> <!-- form-group end.// -->
   </div> <!-- form-row end.// -->
   <div class="form-row">
      <div class="form-group col-md-6">
        <label>Location</label>
        <select name="location" id="inputState" class="form-control">
          <option> Anambra</option>
            <option>Lagos</option>
            <option>Enugu</option>
            <option >Lagos</option>       
        </select>
      </div> <!-- form-group end.// -->

      <div class="form-group col-md-6">
        <label>Departments</label>
        <select name="dept" id="dept" class="form-control">
          <option> Hr</option>
            <option>Finane</option>
            <option>Customer Service</option>
            <option >Reprensentatives</option>
           
        </select>
      </div> <!-- form-group end.// -->
   </div> <!-- form-row.// -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Submit </button>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Thank you</div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  

</article>

</body>
</html>