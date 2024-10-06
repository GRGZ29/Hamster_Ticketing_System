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
                    <li class="active"><a href="ConcertUpdate.php">Update</a></li>
                    <li><a href="ConcertDelete.php">Delete</a></li>
                    <li><a href="Concertfront.html">Logout</a></li>
                </ul>
            </div>
            <div class="title">
            <?php
if (isset($_POST['update']))
{
include('mysql_connect.php');
$id = $_POST['ID'];
$Contact = $_POST['Contact'];
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$City = $_POST['City'];
$Region = $_POST['Region'];
$Country = $_POST['Country'];
$query = "Select * FROM TBRegistrations;";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row)
{
$query = "Update TBRegistrations set ID='$id', Contact_Number='$Contact', Name='$Name', Email='$Email',City='$City',Region='$Region',Country='$Country' WHERE 
ID='$id'";
mysqli_query($conn, $query);
echo "<h2>Record has been updated...</h2>";

}
}
?>
                  </div>
        </header>