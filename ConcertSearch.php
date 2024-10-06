<!DOCTYPE html>
<html>
    <head>
        <title>
            Hamster Creations
        </title>
        <link rel="stylesheet" href="Concertregistercss.css">
    </head>
    <body>
        <header>
            <div class="main">
                <div class="logo">
                    <img src="https://i.ibb.co/LRNc0nL/picturetopeople-org-dd301518
                    bb0d8ea79e6f8cc99eb6c75ddc97b723680f1e1777.png">
                </div>
                <ul>
                    <li><a href="ConcertView.php">View</a></li>  
                    <li><a href="ConcertViewSeats.php">View Seats</a></li>
                    <li class="active"><a href="ConcertSearch.php">Search ID</a></li>
                    <li><a href="ConcertUpdate.php">Update</a></li>
                    <li><a href="ConcertDelete.php">Delete</a></li>
                    <li><a href="Concertfront.html">Logout</a></li>
                </ul>
            </div>
            <div class="title">
            <form action='ConcertSearch.php' method='post'>
<p>User ID: <input type="text" name="ID" size=20 maxlength=40 /></p>
<p><input type='submit' name='search' value='Search' /></p><br><br>
</form>
<?php
if (isset($_POST['ID'])) {
include('mysql_connect.php');
$id = $_POST['ID'];
$query = "Select ID, name, email, password, city, Region, Country, registration_date FROM TBRegistrations WHERE 
ID='$id'";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row) {
echo "User ID : " . $row[0] . "<br>";
echo "Name : " . $row[1] . "<br>";
echo "Email Address : " . $row[2] . "<br>";
echo "Password : " . $row[3] . "<br>";
echo "City : " . $row[4] . "<br>";
echo "Region : " . $row[5] . "<br>";
echo "Country : " . $row[6] . "<br>";
echo "registration_date : " . $row[7] . "<br>";
}
else
echo "No record found...";
}
?>
                  </div>
        </header>

<br><br><a href="ConcertAdminLogin.php">Menu</a>