<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
    <?php

        $connect = mysqli_connect("localhost","root","","book_db");

        $sql = "select * FROM book_form";

        $result = mysqli_query($connect, $sql);

        $json_array = array();

        while($row = mysqli_fetch_assoc($result))
        {
            $json_array[] = $row;
        }

         echo json_encode($json_array);

        // echo'<pre>';
        // print_r($json_array);
        // echo '<pre>';

    ?>
</body>
</html>