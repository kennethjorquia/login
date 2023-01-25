
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <?php
$id=$_GET['id'];
//$id=4;
require 'config.php';
$query = "SELECT * from student where id=?";
if($stmt=$conn->prepare($query)){
$stmt->bind_param('i',$id);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_object();
?>

<table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Class</th>
        <th scope="col">Mark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><?php echo "$row->id";   ?></td>
        <td><?php echo "$row->name";   ?></td>
        <td><?php echo "$row->class";   ?></td>
        <td><?php echo "$row->mark";   ?></td>
    </tr>
  </tbody>
</table>

<a class="btn btn-primary" type="button" href="select.php">back</a>

<?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>









