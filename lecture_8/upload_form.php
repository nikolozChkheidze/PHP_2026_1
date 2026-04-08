        <?php


            if (isset($_POST['send_button'])) {
                echo 'test';
                echo '<pre>';
                print_r($_FILES['file']);;
                echo '</pre>';

    foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
        move_uploaded_file(
            $tmp_name,
            'storage/' . $_FILES['file']['name'][$key]
        );
            }
        
            }
        
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple>
        <br><br>
        <button name="send_button">Send file</button>



    </form>    
</body>
</html>