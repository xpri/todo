<?php
  include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./">ToDo</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./">Home</a></li>
      <li><a href="add.php">Add</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <?php

    $taskid = $_GET["taskid"];

    $sql = "SELECT * FROM tasks WHERE taskid='$taskid'";

    $query = mysqli_query($conn, $sql);

    // print_r($query);

    $row = mysqli_fetch_assoc($query);

    $taskname = $row["name"];
    $description = $row["description"];
    $starttime = $row["starttime"];
    $stoptime = $row["stoptime"];
    $location = $row["location"];

  ?>
	<form action="edit.do.php" method="post">
  <div class="form-group">
    <label for="name">Task Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?=$taskname?>">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" value="<?=$description?>">
  </div>

  <div class="form-group">
    <label for="starttime">Start At</label>
    <input type="date" class="form-control" id="starttime" name="starttime"  value="<?=$starttime?>">
  </div>

  <div class="form-group">
    <label for="stoptime">Stop At</label>
    <input type="date" class="form-control" id="stoptime" name="stoptime" value="<?=$stoptime?>">
  </div>

  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" id="location" name="location"  value="<?=$location?>">
  </div>

  <input type="hidden" name="taskid"  value="<?=$taskid?>">
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>

</body>
</html>