

<?php
/*
With PHP, it is easy to upload files to the server.

However, with ease comes danger, so always be careful when allowing file uploads!

Configure The "php.ini" File

First, ensure that PHP is configured to allow file uploads.

In your "php.ini" file, search for the file_uploads directive, and set it to On: 


    file_uploads = On 



    Create The HTML Form

Next, create an HTML form that allow users to choose the image file they want to upload:

    // guide Lines:

    Some rules to follow for the HTML form above:

    Make sure that the form uses method="post"
    The form also needs the following attribute: enctype="multipart/form-data". It specifies which content-type to use when submitting the form

Without the requirements above, the file upload will not work.

Other things to notice:

    The type="file" attribute of the <input> tag shows the input field as a file-select control, with a "Browse" button next to the input control

The form above sends data to a file called "upload.php", which we will create next.

Check if File Already Exists

Now we can add some restrictions.

First, we will check if the file already exists in the "uploads" folder. If it does, an error message is displayed, and $uploadOk is set to 0:


    
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;


Limit File Size

The file input field in our HTML form above is named "fileToUpload".

Now, we want to check the size of the file. If the file is larger than 500KB, an error message is displayed, and $uploadOk is set to 0:
  // Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
} 
*/

$target_dir = "uploads/";

if(isset($_POST["submit"])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
    // move_uploaded_file($target_dir,$_FILES["fileToUpload"]["tmp_name"]);
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  }elseif (file_exists($target_file)) {
    $file_error = "Sorry, file already exists.";
    $uploadOk = 0;
}elseif ($_FILES["fileToUpload"]["size"] > 500000) {
    $file_error = "Sorry, your file is too large.";
    $uploadOk = 0;
    // Allow certain file formats or type only JPG, JPEG, PNG & GIF files are allowed
  }elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }  else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $file_error= "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        $file_error = "Sorry, there was an error uploading your file.";
    }
  }
}
?>


<h1>Create The HTML Form</h1>

<form action="php_file_upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
  <span style="color:red; font: size 1.5rem;">
    <?php if(isset($file_error)) echo $file_error;  ?>
  </span>
</form>

