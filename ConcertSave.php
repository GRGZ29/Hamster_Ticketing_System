<!DOCTYPE html>
<html>
    <head>
        <title>
            Hamster Creations
        </title>
        <link rel="stylesheet" href="Concertfrontcss.css">
    </head>
    <body>
        <header>
            <div class="main">
                <div class="logo">
                    <img src="https://i.ibb.co/LRNc0nL/picturetopeople-org-dd301518
                    bb0d8ea79e6f8cc99eb6c75ddc97b723680f1e1777.png">
                </div>
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="ConcertContact.html">Contact us</a></li>
                </ul>
            </div>
            <div class="title">
                    <div class="logo2">
                        <img src="https://i.ibb.co/rb9D5VL/online-concert-ticketing-system-logo-1.png">
                    </div>
                    <?php
 include('mysql_connect.php');
if (empty($_POST['contactno']) || empty($_POST['name']) || empty($_POST['email']) 
|| empty($_POST['password']) || empty($_POST['city']) || empty($_POST['region']) || empty($_POST['country'])) {
    echo "Please fill up all the blanks";
} else {
    if (is_numeric($_POST['contactno'])) {
    $contactno = $_POST['contactno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $country = $_POST['country'];

    echo "<br><b>Contact Number: </b>". $contactno ."<br><b>Name: </b>" . $name . "<br><b>Email: </b>" . $email . "<br><b>Password: </b>" . $password . "<br><b>City: </b>"
     . $city . "<br><b>Region: </b>" . $region . "<br><b>Country: </b>" . $country . "<br><br>";
?> 
<?php
     $sql = "INSERT INTO TBRegistrations (ID, Contact_Number, Name, Email, Password, City, Region, Country, registration_date) VALUES ('','$contactno','$name','$email',SHA('$password'),'$city','$region','$country',NOW());";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
    else {
        echo "Please input correct values";
    }
}

?>
<br><br>
<center>
<form action="Concertfront.html">
<input type="submit" value="Done">
</center>
                  </div>

        </header>

