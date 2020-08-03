<?php
include("upload.php");


$fetchVideos = mysqli_query($con, "SELECT video_id FROM video_upload ");
              while($row = mysqli_fetch_assoc($fetchVideos)){
              $video_id = $row['video_id'];
              }

$user_info = "INSERT INTO sarcasm (video_id,sarcastic,align) VALUES ('".$video_id."','$_POST[sarcastic]','$_POST[align]')"; 
mysqli_query($con,$user_info);
//echo "Upload successfully.";
?>