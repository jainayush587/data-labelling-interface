<?php
include("upload.php");
include("index.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" >
        <div>
            
        </div>
        <video src='".$value."' controls width='320px' height='200px' >

        <p><b>Question 1:</b>Is this video sarcastic?</p>
        <input type='radio' id='sarcastic_yes' name='sarcastic' value='Yes'>
        <label for='Yes'>Yes</label><br>
        <input type='radio' id='sarcastic_no' name='sarcastic' value='No'>
        <label for='No'>No</label><br>

        <p><b>Question 1:</b>Is this video sarcastic?</p>
        <input type='radio' id='sarcastic_yes' name='sarcastic' value='Yes'>
        <label for='Yes'>Yes</label><br>
        <input type='radio' id='sarcastic_no' name='sarcastic' value='No'>
        <label for='No'>No</label><br>

        <button type='submit' value='Upload' name='info_upload'>Submit</button>
    </form>
</body>
</html>