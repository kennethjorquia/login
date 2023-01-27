<?php

$conn = mysqli_connect("localhost", "root", "", "sms_guidance_system");


$post_id = intval($_POST['id']);
$name = $_POST['title'];
$description = $_POST['description'];

if($rows = mysqli_query($conn, "UPDATE upload_post SET name = '$name', description = '$description', category = 'Guidance Post', date = '2023-01-26' WHERE id = $post_id")){
    header("Location: ../career_orientation.php?edited='Your post has been edited.'");
}
else{
    header("Location: ../career_orientation.php?failed='We couldn’t save your changes.'");
}
exit();