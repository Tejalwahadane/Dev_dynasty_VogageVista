<?php

    $conn = mysqli_connect("localhost","root","","book_db");

    if(isset($_POST["send"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $location = $_POST["location"];
        $guests = $_POST["guests"];
        $budget = $_POST["budget"];
        $period = $_POST["period"];

        echo "successful";
        $request = " INSERT INTO book_form(name, email,	phone, address,	country, state, location, guests, budget, period) values('$name','$email','$phone','$address','$country','$state','$location','$guests','$budget','$period')";
        echo "successful";
        mysqli_query($conn, $request);

        header('location:book.php');
    }
    else{
        echo 'something went wrong try again later';
    }

?>