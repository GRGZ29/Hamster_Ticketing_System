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
                    <li><a href="ConcertView.php">View</a></li>
                    <li><a href="ConcertViewSeats.php">View Seats</a></li>
                    <li ><a href="ConcertSearch.php">Search ID</a></li>
                    <li ><a href="ConcertUpdate.php">Update</a></li>
                    <li class="active"><a href="ConcertDelete.php">Delete</a></li>
                    <li><a href="Concertfront.html">Logout</a></li>
                </ul>
            </div>
            <div class="title">
            <h2>Delete Record</h2>
<form method='post'>
<p>User ID: <input type="text" name="ID" size=20 maxlength=40 /></p>
<p><input type='submit' name='search' value='Search' /></p>
</form>
<?php
if (isset($_POST['search'])) {
include('mysql_connect.php');
$id = $_POST['ID'];
$query = "Select ID, Contact_Number, Name, email, Password, City, Region, Country FROM TBRegistrations
WHERE ID='$id' ";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row) {
echo "User ID : " . $row[0] . "<br>";
echo "Contact Number : " . $row[1] .  "<br>";
echo "Name : " . $row[2] . "<br>";
echo "Email : " . $row[3] . "<br>";
echo "Password : " . $row[4] . "<br>";
echo "City : " . $row[5] . "<br>";
echo "Region : " . $row[6] . "<br>";
echo "Country: " . $row[7] . "<br>";
echo "<form action='ConcertDeleted.php' method='post'>
<br><h4>Deleting Record.... Are you sure?</h4>
<p><input type=hidden name='ID' value='$_POST[ID]'>
<input type=radio name='ans' value='Yes'>YES
<input type=radio name='ans' value='No'>NO <br><br>
<p><input type='submit' name='delete' value='Delete' /></p> </form>";
}
else
echo "No record found..."; }   ?>
                  </div>
        </header>