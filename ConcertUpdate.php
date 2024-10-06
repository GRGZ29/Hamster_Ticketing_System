<!DOCTYPE html>
<html>
    <head>
        <title>
            Hamster Creations
        </title>
        <link rel="stylesheet" href="ConcertUpdate.css">
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
                    <li ><a href="ConcertSearch.php">Search ID</a></li>
                    <li class="active"><a href="ConcertUpdate.php">Update</a></li>
                    <li><a href="ConcertDelete.php">Delete</a></li>
                    <li><a href="Concertfront.html">Logout</a></li>
                </ul>
            </div>
            <div class="title">
            <h2>Update Record</h2>
<form action='ConcertUpdate.php'  method='post'>
<p>User ID: <input type="text" name="ID" size=20 maxlength=40 /></p>
<p><input type='submit' name='search' value='Search' /></p>
</form>
<?php
if (isset($_POST['search'])) {
include('mysql_connect.php');
$id = $_POST['ID'];
$query = "Select ID, Contact_Number, Name, Email, Password, City, Region, Country FROM TBRegistrations WHERE 
ID='$id'";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row)  {
echo "<form action='ConcertUpdated.php' method='post'>";
echo "User ID: " . "<input type=hidden name=ID value='$row[0]'>$row[0]" . "<br>";
echo "Contact Number: " . "<input type=text name=Contact value='$row[1]'> <br>";
echo "Name : " . "<input type=text name=Name value='$row[2]'> <br>";
echo "Email Address : " . "<input type=text name=Email value='$row[3]'> <br>";
echo "Password: " . $row[4] . "<br>";
echo "City : " . "<input type=text name=City value='$row[5]'> <br>";
echo "Region : " . "<input type=text name=Region value='$row[6]'> <br>";
echo "Country : " . "<input type=text name=Country value='$row[7]'> <br>";
echo "<p><input type='submit' name='update' value='Update' /></p></form>";
}
else
echo "No record found...";  }  ?>
                  </div>
        </header>