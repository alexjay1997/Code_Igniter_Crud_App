<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
-->
<title>Crud In Code Igniter | Edit Page</title>
<style>
    .edit-form-container{

       margin-top:30px; 
       width:400px;
    }
 </style>
</head>
<body>
      <div class="page-container">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Code Iginiter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 my-2 my-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Logout <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    
  </div>
</nav>

    <div class="container edit-form-container">
    <br>
    <?php echo $this->session->flashdata('success_msg'); ?>    
    
    <?php
       // foreach($result as $row)
        //{
          
          
          
         // foreach($result as $row){
          
        ?>
          <!--form  add new member start--->
      <form method="post" action="<?php echo site_url('CrudController/update_user'); ?>/<?php echo $row->id;?>">
  <div class="form-group">
    <label for="InputFirstname">Firstname</label>
    <input type="text" class="form-control" name ="firstname" id="exampleInputEmail1" aria-describedby="FirstnameHelp" placeholder="Enter Firstname" value="<?php echo $row->fname;?>">
    
  </div>
  <div class="form-group">
    <label for="InputLastname">Lastname</label>
    <input type="text" class="form-control" name ="lastname" id="exampleInputEmail1" aria-describedby="LastnameHelp" placeholder="Enter Lastname" value="<?php echo $row->lname;?>">
    
  </div>
  <div class="form-group">
    <label for="InputBirthday">Birthday</label>
    <input type="date" class="form-control" name ="birthday" id="exampleInputEmail1" aria-describedby="Birthdayhelp" placeholder="Enter Birthdate" value="<?php echo $row->birthday;?>">
    
  </div>
  <div class="form-group">
    <label for="InputAddress">Address</label>
    <input type="text" class="form-control" name ="address" id="exampleInputEmail1" aria-describedby="AddressHelp" placeholder="Enter Address" value="<?php echo $row->address;?>">
    
  </div>
  <div class="form-group">
    <label for="InputContact">Phone <label>
    <input type="number" class="form-control" name ="contact" id="exampleInputEmail1" aria-describedby="ContactHelp" placeholder="Enter Phone" value="<?php echo $row->contact;?>">
    
  </div>
  <?php 
        //  }
  ?>
          <a href="<?php echo site_url("CrudController/");?>" type="button" class="btn btn-secondary">Cancel</a>

          <button type="submit"  class="update-user btn btn-warning" onclick="return confirm('are you sure you want to update this Record?');">Update</button>
      
 </form>
    <!--form End -->

<br><br>    
   
</div>    
</div> 
<script>
  
</script> 
</body>
</html>
