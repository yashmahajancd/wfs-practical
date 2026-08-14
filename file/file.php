<?php

if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    // echo "<pre>" . print_r($_FILES) . "</pre>";

    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];

    if (file_exists("upload/" . $file_name)) {
        echo "File Already Exists";
    } elseif (move_uploaded_file($file_tmp, "upload/" . $file_name)) {
        echo "File Successfully Uploaded";
    } else {
        echo "Could Not Upload the File";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload & Download</title>
</head>

<body>
    <center>
        <h2>--- SELECT FILE ---</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <table style="background-color: #b9b9b9; display: flex; justify-content: center; padding: 15px 0px">
                <tr>
                    <td><input type="file" name="file"> <br><br> </td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>

        <br><br>

        <?php if (isset($file_name)): ?>

            <a
                download="<?php echo htmlspecialchars($file_name); ?>"
                href="upload/<?php echo rawurlencode($file_name); ?>">
                Click Here To Download
            </a>

        <?php endif; ?>
    </center>   
</body>

</html>