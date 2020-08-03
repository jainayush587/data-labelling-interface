
<!doctype html>
<html>
  <head>
    
  </head>
  <body>
  <?php
    include("upload.php");
 
    $maxsize = 10000000; // 10MB

    $myfile = fopen("yumiwankuva.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
        $text[] = fgets($myfile);
    }
    fclose($myfile);

    foreach($text as $value){
            // Upload
              // Insert record
        $query = "INSERT INTO video_upload(video_url) VALUES('".$value."')";

        mysqli_query($con,$query);
        echo "Upload successfully.";
    }

    ?>
  </body>
</html>