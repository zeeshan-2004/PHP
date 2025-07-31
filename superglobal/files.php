<?php
if(isset($_FILES['file'])){
    print_r($_FILES);//return an array
    echo "<br>";
    $filenm=$_FILES['file']['name'];
    echo $filenm.'<br>';
    $filetmp=$_FILES['file']['tmp_name'];
    //for store uploaded files
    if(move_uploaded_file($filetmp,'uploadfiles/'. $filenm)){//file has upload
        echo 'succesfully uploaded';
}  
else{
    echo 'not succesfully uploaded';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='' method='POST'  enctype="multipart/form-data">
        <label for='file'>upload file</label><br>
        <input type='file' name='file'> <br>
        <input type='submit'>
    </form>
</body>
</html>
<?php  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['img'])) {
        $filenm = $_FILES['img']['name'];
        $filetm = $_FILES['img']['tmp_name'];
        $text = strtolower(pathinfo($filenm, PATHINFO_EXTENSION));

        if ($text === 'png' || $text === 'jpeg' || $text === 'jpg') {

         

            
            if (move_uploaded_file($filetm, 'uploadfiles/' . $filenm)) {
                echo 'upload successfully';
            } else {
                echo 'not uploaded successfully';
            }

        } else {
            echo 'Invalid file type. Only JPG, JPEG, PNG allowed.';
        }
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <label for="file">Upload image</label><br>
        <input type="file" name="img" required><br>
        <input type="submit">
    </form> 
</body>
</html>
