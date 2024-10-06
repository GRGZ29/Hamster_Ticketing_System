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
                </ul>
            </div>
            <div class="title">
                <form action="ConcertCustomerPage.php" method="post">
                    <div class="logo2">
                        <img src="https://i.ibb.co/rb9D5VL/online-concert-ticketing-system-logo-1.png">
                    </div>
                    <?php
                    include('mysql_connect.php');
                    if (empty($_POST['username']) || empty($_POST['password'])) {
                        echo "Please fill the blanks.";
                        ?>
                        <br><br><a href="Concertfront.html">Back</a>
                        <?php
                    } else {
                        $email = $_POST['username'];
                        $password = $_POST['password'];
                        $query = "Select ID, Name, Email, Password FROM TBRegistrations WHERE 
                     Email='$email' AND Password=SHA('$password')";
                      $result = @mysqli_query($conn, $query);
                      $row = mysqli_fetch_array($result);
                        if ($row) {
                            echo "<H3><center>Welcome! $row[1]</center></H3><br><br>";
                            ?>
                        <center><input type="submit" value="Proceed to Customer Page"></center>
                        <?php
                        } else {
                            echo 'The email address and password entered do not match those on file.';
                            ?>
                        <br><br><a href="Concertfront.html">Back</a>
                        <?php
                        }

                    }
                    ?>
                  </div>
        </header>