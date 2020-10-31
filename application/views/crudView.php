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
<title>Crud In Code Igniter</title>
<style>
    .tbl-container{

       margin-top:30px; 
    }
 </style>
</head>
<body>
      <div class="page-container">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Simple Crud </a>
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

    <div class="container tbl-container">
    <br>
    <?php echo $this->session->flashdata('success_msg'); ?>    
    

    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  + Add New Member
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <!--form  add new member start--->
      <form method="post" action="<?php echo site_url('CrudController/create'); ?>">
  <div class="form-group">
    <label for="InputFirstname">Firstname</label>
    <input type="text" class="form-control" name ="firstname" id="exampleInputEmail1" aria-describedby="FirstnameHelp" placeholder="Enter Firstname">
    
  </div>
  <div class="form-group">
    <label for="InputLastname">Lastname</label>
    <input type="text" class="form-control" name ="lastname" id="exampleInputEmail1" aria-describedby="LastnameHelp" placeholder="Enter Lastname">
    
  </div>
  <div class="form-group">
    <label for="InputBirthday">Birthday</label>
    <input type="date" class="form-control" name ="birthday" id="exampleInputEmail1" aria-describedby="Birthdayhelp" placeholder="Enter Birthdate">
    
  </div>
  <div class="form-group">
    <label for="InputAddress">Address</label>
    <input type="text" class="form-control" name ="address" id="exampleInputEmail1" aria-describedby="AddressHelp" placeholder="Enter Address">
    
  </div>
  <div class="form-group">
    <label for="InputContact">Phone <label>
    <input type="number" class="form-control" name ="contact" id="exampleInputEmail1" aria-describedby="ContactHelp" placeholder="Enter Phone">
    
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
 </form>
    <!--form End -->
      </div>
      
    </div>
  </div>
</div>
<br><br>    
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
            <th scope="col">Contact No</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
       // foreach($result as $row)
        //{
          
          
          
          foreach($result as $row){
          
        ?>
            <tr>
            <th scope="row"><?php echo $row->id; ?></th>
            <td><?php echo $row->fname; ?></td>
            <td><?php echo $row->lname; ?></td>
            <td><?php echo $row->birthday; ?></td>
            <td><?php echo $row->address; ?></td>
            <td><?php echo $row->contact; ?></td>
            <td><a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>" class="edit-user btn btn-primary" ><i class='far fa-edit'></i>&nbsp;Edit</a>&nbsp;<a href="#" class="delete btn btn-danger" id="<?php echo $row->id; ?>"><i class='fa fa-trash-alt'></i>&nbsp;Delete</a></td>
            
            </tr>
            
          <?php
          }
          $this->Crud_model->selectAll_num_rows();
          ?>  
        </tbody>
        </table>
</div>    
</div> 
<script>
// for delete function
  $(document).ready(function(){
    $('.delete').click(function(){
        var id= $(this).attr("id");
        if(confirm("are you bsure you want to delete this?")){
            window.location="<?php echo base_url(); ?>index.php/CrudController/delete_user/"+id;
        }
        else{

          return false;
        }
    });
 
  });
</script> 
</body>
</html>
