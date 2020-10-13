<?php
$host = "localhost:3308";
$user = "root";
$password = "";
$db = "test";

$conn = mysqli_connect($host, $user, $password, $db);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}


// mysqli_connect($host, $user, $password);

if (isset($_POST['save_audio'])) {

    $file = $_FILES['file'];
    $filename = mysqli_real_escape_string($conn, $_POST['audioname']) . ".mp3";
    $path = "files/Audio/" . $filename;


    $education = mysqli_real_escape_string($conn, $_POST['education']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $language = mysqli_real_escape_string($conn, $_POST['language']);
    echo "\nfile path is :$path\n";
    echo "\nfilename is :$filename\n";
    echo "education  is :$education\n";
    echo "category  is :$category\n";
    echo "language  is :$language\n";
    if (file_exists($path)) {
        echo "<srcipt>
        alert('This file already exists. Try to change name of the file');
        Window.location.href='addnewaudio.php';
        </srcipt>";
    }
    if (move_uploaded_file($file["tmp_name"], $path)) {
        $sql = "INSERT INTO audiofiles ( name, education, category, language) VALUES ('$filename','$education','$category','$language')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo ("<br>Query has been implemented");
        } else {
            echo ('error in query implementation');
        }

        if (mysqli_affected_rows($conn)) {
            echo "
            <script>
                alert('Mysql has been sucessfully updated');
                Window.location.href='./addnewaudio.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('something went wrong with mysql');
                Window.location.href='./addnewaudio.php';
            </script>
            ";
        }
    }
} else {
    echo "
            <script>
                alert('something went wrong with file path');
                Window.location.href='./addnewaudio.php';
            </script>
        ";
}
