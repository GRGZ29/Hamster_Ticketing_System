<!DOCTYPE html>
<html>
    <head>
        <title>
            Hamster Creations
        </title>
        <link rel="stylesheet" href="Concertview.css">
    </head>
    <body>
        <header>
            <div class="main">
                <div class="logo">
                    <img src="https://i.ibb.co/LRNc0nL/picturetopeople-org-dd301518
                    bb0d8ea79e6f8cc99eb6c75ddc97b723680f1e1777.png">
                </div>
                <ul>
                    <li class="active"><a href="ConcertView.php">View</a></li>
                    <li><a href="ConcertViewSeats.php">View Seats</a></li>
                    <li ><a href="ConcertSearch.php">Search ID</a></li>
                    <li ><a href="ConcertUpdate.php">Update</a></li>
                    <li><a href="ConcertDelete.php">Delete</a></li>
                    <li><a href="Concertfront.html">Logout</a></li>
                </ul>
            </div>
            <div class="title">
            <link rel="stylesheet" href="Concertfront.css">
<center><p>Concert Ticketing System </p></center>
<br>

<div class="background">

 <br><br>
 <style>
table, th, td {
    border: 1px solid white;
    width: 1300px;
    padding: 3px;
}
</style>
<?php
include('mysql_connect.php');
$query = "SELECT ID, Contact_Number, Name, Email, City, Region, Country, registration_date FROM TBregistrations;";
$result = @mysqli_query($conn, $query);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Contact Number</th><th>Name</th><th>Email</th><th>City</th><th>Region</th><th>Country</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['ID'] ."</td><td>". $row["Contact_Number"]. "</td><td>" . $row["Name"]. 
        "</td><td>" . $row["Email"]. "</td><td>" . $row["City"] . "</td><td>" 
        . $row["Region"] .  "</td><td>"  . $row["Country"]  .  "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

</div>
                  </div>
        </header>
