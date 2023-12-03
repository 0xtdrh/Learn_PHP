<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $text = "";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $myfile = $_FILES['myup'];
        copy($myfile['tmp_name'] , $myfile['name']);    
        $name = $myfile['name'];

        $myfile = fopen($name , 'r');
        $text = fread($myfile,filesize($name));    
        fclose($myfile);

    }
?>
<center>
    <div style="background-color:violet;width: 500px;height: 150px;">
        <h1>Upload File Form </h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="myup" >
            <button style="color: white;background-color: blueviolet;margin-top: 30px;width: 480px;height: 30px;">Submit</button>

        </form>
    </div>
    <div style="background-color:violet;width: 500px;height: 150px;">
        <h1>File Content</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <textarea name="textfile"  cols="70" rows="15"><?php echo $text;?></textarea>
            

        </form>
    </div>
</center>
</body>
</html>