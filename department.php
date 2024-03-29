<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/filter-table.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/b1b0cba1bb.js" crossorigin="anonymous"></script> 
    <title>Admin</title>
</head>

<body>
<?php
    session_start();
    if(isset($_SESSION['username'])){

?>
<div class="sidebar-container" id="navItem">
  <a href="#" class="navbar-brand">
    <img src="assets/image/logo.png" height="200">
  </a>
  <ul class="sidebar-navigation">
    
    <li>
      <a href="admin.php">
        <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
      </a>
    </li>
    <li>
      <a href="#" class="active">
        <i class="fa fa-user-tie" aria-hidden="true"></i> Professors
      </a>
    </li>
    <li>
      <a href="student.php">
        <i class="fa fa-users" aria-hidden="true"></i> Students
      </a>
    </li>
    <li>
      <a href="collectives.php">
        <i class="fa fa-files-o" aria-hidden="true"></i> Collectives
      </a>
    </li>
    <li>
      <a href="subjects.php">
        <i class="fa fa-list-alt" aria-hidden="true"></i> Subjects
      </a>
    </li>
    <li>
      <a href="schedule.php">
        <i class="fa fa-calendar" aria-hidden="true"></i> Schedule
      </a>
    </li>
    <li>
      <a href="manageAcc.php">
        <i class="fa fa-tasks" aria-hidden="true"></i> Manage Accounts
      </a>
    </li>
    <li>
      <a href="logout.php">
        <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
      </a>
    </li>  
  </ul>
</div>



<div class="content">
  <div class="content-container">
    <nav class="navbar navbar-light bg-light  justify-content-between">
      <a class="navbar-brand">Professors</a>
      <form class="form-inline">
      <input type="text" id="myInput" class="form-control mr-sm-2" onkeyup="myFunction()" placeholder="Search for name..">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          Add Professor
        </button>
    </form>
    </nav>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
           <div class="card border-light mb-3">
            <div class="card-header card-header-warning card-header-tabs">
              <h4 class="card-title">Professor List</h4>
              <p class="card-category">Professors with their Respective Accounts</p>
            </div>
            <div class="card-body table-responsive">
              <table id="myTable" class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Account Status</th>
                  <th scope="col">Actions</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Joemen Barrios</td>
                    <td>CSD</td>
                    <td>UCCJoemenBarrios</td>
                    <td>*****</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                   <tr>
                    <td>2</td>
                    <td>Raul Gutierrez</td>
                    <td>CSD</td>
                    <td>UCCRaulGuttierez</td>
                    <td>*****</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Jerwin Cabral</td>
                    <td>CSD</td>
                    <td>UCCJerwinCabral</td>
                    <td>*****</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                    </tr>
                  <tr>
                    <td>4</td>
                    <td>Michael Tan</td>
                    <td>CSD</td>
                    <td>UCCMichaelTan</td>
                    <td>*****</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Jeffrey Coco</td>
                    <td>CSD</td>
                    <td>UCCJeffreyCoco</td>
                    <td>*****</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
    }
    else
    {
        header("location:index.php");
    }

?>            

</body>

</html>