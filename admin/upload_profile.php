					<?php
if (isset($_POST['btn_uploadpic']));
{
	$id=$_POST['hf_uname'];
	move_uploaded_file($_FILES["file"] ["tmp_name"], "profile/".$id.".jpg");
	echo "Successfully Uploaded!";
}
?>
      <!DOCTYPE html>
      <html>
      <head>
        <title>Upload File</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css"></style>
      </head>
      <body>
      
      </body>
      </html>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="file">Select Picture</label>
    <input type="file" name="file" id="file" />
    <input type="submit" name="btn_uploadpic" id="btn_uploadpic" value="UPLOAD" />
  </p>
  <p> 
    <input name="hf_uname" type="hidden" id="hf_uname" value="<?php echo $_POST['hf_uname']?>" />
  </p>
</form>
</p>
