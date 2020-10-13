<?php

require './connect.php';

if (isset($_POST['submit'])) {

    $file = $_FILES['file'];
    $filename = mysqli_real_escape_string($connection, $_POST['audioname']) . ".mp3";
    $path = "files/Audio/" . $filename;


    $education = mysqli_real_escape_string($connection, $_POST['education']);
    $category = mysqli_real_escape_string($connection, $_POST['category']);
    $language = mysqli_real_escape_string($connection, $_POST['language']);

    if (file_exists($path)) {
        echo "<srcipt>
        alert('This file already exists. Try to change name of the file');
        window.location.href='./addAudio.php';
        </srcipt>";
    } else if (move_uploaded_file($file["tmp_name"], $path)) {
        $sql = "INSERT INTO `audiofiles` ( `name`, `education`, `category`, `language`) VALUES ('$filename','$education','$category','$language')";

        $result = mysqli_query($connection, $sql);

        if (!$result) {
            echo "<script>
                alert('error in query implementation ');
                window.location.href='./addAudio.php';
            </script>";
        }

        if (mysqli_affected_rows($connection)) {
            echo "
            <script>
                alert('Audio book has been uploaded sucessfully');
                window.location.href='./addAudio.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('something went wrong.');
                window.location.href='./addAudio.php';
            </script>
            ";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/findbook.css">

    <style>
    label{
        font-size:1.5rem;
    }
        
    </style>

</head>


<body>
    <div class="container mt-4 col-10">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

            <div class="row">
                <h2 class="m-2">
                    Add Audio files                    
                </h2>
            </div>

            <div class="form-group col-md-8">
                <input type="text" maxlength="250" class="form-control mt-2 mb-2" id="audioname" name="audioname" placeholder="Enter  name of the file" required>
            </div>
            

            <label>Choose education:</label>
            <select name="education">
                <option value="Nursery">Nursery</option>
                <option value="Junior">Junior </option>
                <option value="senior">senior</option>
            </select><br>

            <label>Choose category:</label>
            <select name="category">
                <option value="Rhymes">Rhymes</option>
                <option value="short Stories">Short Stories </option>
            </select><br>

            <label>Choose a language:</label>
            <select name="language">
                <option value="hindi">hindi</option>
                <option value="marathi">marathi</option>
                <option value="English">English </option>
            </select><br>

            <label for="file">File:</label>
            <input type="file" id="file" name="file" title="click here to upload audio file"><br>

            <button type="submit" value="submit" name="submit">Upload </button>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>