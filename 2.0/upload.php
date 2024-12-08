<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $targetDir = "uploaded_files/";

    if(!is_dir($targetDir))
    {mkdir($targetDir, 0777, true);}

    $filepath = $targetDir . basename($_FILES["file"]["name"]);
    
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
    {echo "File Uploaded Successfully!";}
    else {
        echo "There was an error while uploading the file :(";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">

<head>
    <title> File Upload System </title>
    <link rel="stylesheet" href="upload.css">
</head>

<body>
    <h1> File Upload System </h1>

    <form action = "" method = "POST" enctype = "multipart/form-data">
        <label for = "file"> Attach Your File </label>
        <input type = "file" name = "file" id = "file" requied>
        <button type = "submit"> Submit </button>
    </form>
</body>
</html>   
