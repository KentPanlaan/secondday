<?php
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>

<?php

$newconnection->addStudent();
?>

  <div class="container">
  <form action="" method="POST" class="row g-12">
<div class="row">
  
    <!-- <form class="row g-3"> -->
    
    <div class="col">
    <label for="inputEmail4" class="form-label"> First name</label>
    <input type="text" class="form-control" id="first_name" name="first_name"required>
  </div>
  <div class="col">
  <label for="inputEmail4" class="form-label"> Last name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" required>
  </div>
   <div class="col">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

</div>
<div class="row">
  
    <!-- <form class="row g-3"> -->
    
    <div class="col">
    <label for="inputGender" class="form-label">Gender</label>
    <select id="gender" class="form-select" id="gender" name="gender"required>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
  <div class="col">
  <label for="inputBirth" class="form-label"> Birthdate</label>
    <input type="date" class="form-control" id="birtdate" name="birthdate"required>
  </div>
   <div class="col">
   <label for="inputAddress" class="form-label">Address</label>
   <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"required>
  </div>

</div>
    <div class="col-12">
      <br>
      <button type="submit" class="btn btn-primary" name="addstudent">Add</button>
    </div>
</form>
<br>
<table class="table table-primary">
  <thead>
    <tr>
      <th scope="col"># </th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthdate</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
      <th scope="col"> </th>

    </tr>
  </thead>
  <tbody>
  <?php
//fetch data in the table from database

//get connection

$connection = $newconnection->openConnection();

//prepare statement
$stmt = $connection->prepare("SELECT * FROM new_tables");

//execute query
$stmt->execute();

//fetch result of the query
$result =$stmt->fetchAll();

if($result){
  foreach($result as $row){
  ?>

  <tr>
<td><?php echo $row->id?></td> 
<td><?php echo $row->first_name?></td>
<td><?php echo $row->last_name?></td>
<td><?php echo $row->email?></td>
<td><?php echo $row->gender?></td>
<td><?php echo $row->birthdate?></td>
<td><?php echo $row->address?></td>
<td><a href="" class="btn btn-warning">Edit</a></td>
<td><button type="submit" class="btn btn-danger">Delete</button>
</td>
</tr>
<?php
}
}
?>
  </tbody>
</table>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
cdn.jsdelivr.net