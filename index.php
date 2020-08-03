
<?php
include("upload.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      body{
        display : center;
      }
    video{
     float: center;
    }
    </style>
  </head>
  <body>
    <?php
      $fetchVideos = mysqli_query($con, "SELECT * FROM video_upload ");
      //$rows = Array();
      //print_r($fetchVideos)
      // while($row = mysqli_fetch_array($fetchVideos, MYSQLI_ASSOC)) {
      //   $rows[] =  $row['video_url'];
      // }
      //print_r($rows);
      foreach ($fetchVideos as $row) {
        $video_url = $row['video_url'];
        $video_id = $row['video_id'];
        echo "<form action='' method='post'>";
        echo "<div >";
        echo "<input type='hidden' name='video_url' value='".$video_url."'>";
        echo "<input type='hidden' name='video_id' value='".$video_id."'>";
        echo "<video src='".$video_url."' controls width='320px' height='200px' >";
        //echo "<iframe width='320px' height='200px' frameborder='0' src='".$value."' allowfullscreen ></iframe>";
        echo "</div>";
        echo "<div>";

        echo "<p><b>Question 1:</b>Is this video sarcastic?</p>";
        echo "<input type='radio' id='sarcastic_yes' name='sarcastic' value='Yes'>";
        echo "<label for='Yes'>Yes</label><br>";
        echo "<input type='radio' id='sarcastic_no' name='sarcastic' value='No'>";
        echo "<label for='No'>No</label><br>";

        echo "<p><b>Question 2:</b>Are the video and audio porperly aligned?</p>";
        echo "<input type='radio' id='align_yes' name='align' value='Yes'>";
        echo "<label for='Yes'>Yes</label><br>";
        echo "<input type='radio' id='align_no' name='align' value='No'>";
        echo "<label for='No'>No</label><br>";

        echo "<button type='submit' value='Upload' name='info_upload'>Submit</button>";
        echo "</div>";
        echo "</form>";
        echo "<br><br>";
      }
        if(isset($_POST['info_upload']) && isset($_POST['video_url']) && isset($_POST['video_id'])){
          $video_id = $_POST['video_id'];
          $user_info = "INSERT INTO sarcasm (video_id,sarcastic,align) VALUES ('".$video_id."','$_POST[sarcastic]','$_POST[align]')"; 
          mysqli_query($con,$user_info);
          //echo "Upload successfully.";
        }
      
    ?>
      <!-- <div>
          <p><b>Question 1:</b>Is this video sarcastic?</p>
          <input type="radio" id="sarcastic_yes" name="sarcastic" value="Yes">
          <label for="Yes">Yes</label><br>
          <input type="radio" id="sarcastic_no" name="sarcastic" value="No">
          <label for="NO">No</label><br>

          <p><b>Question 2:</b>Are the video and audio porperly aligned?</p>
          <input type="radio" id="Yes" name="align" value="Yes">
          <label for="Yes">Yes</label><br>
          <input type="radio" id="No" name="align" value="No">
          <label for="NO">No</label><br>

          <button type="submit" value='Upload' name='info_upload'>Submit</button>
      </div>
    </form>
     
    ?>
     -->

  </body>
</html>