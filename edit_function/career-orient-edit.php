<?php

$conn = mysqli_connect("localhost", "root", "", "sms_guidance_system");

$post_id = $_GET['edit'];

$rows = mysqli_query($conn, "SELECT * FROM upload_post WHERE id = $post_id");

$editArray = mysqli_fetch_assoc($rows);

echo json_encode($editArray);