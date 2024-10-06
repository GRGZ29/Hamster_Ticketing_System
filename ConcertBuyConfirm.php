<!DOCTYPE html>
<html>
    <head>
        <title>
            Adrian Odango Creations
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
            </div>
            <div class="title">
                <form action="ConcertBuying.php" method="post">
                    <center><p>Conformation Page</p><br><br></center>
<?php
     $name = $_POST['name'];
     $conNum = $_POST['contactnum'];
     $accnum = $_POST['accnum'];
     if(!ctype_digit($conNum) || !isset($_POST['seatplan']) || !isset($_POST['payment'])) 
       echo "<h4>Incomplete Informationm. Please Try again and Fill up all the Blanks </h4><br><br>" . '<center><button onclick="history.back()">Go Back</button></center>';
       else {
       echo "<p>NAME: $name </p> ";
       echo "<p>CONTACT NUMBER: $conNum </p>";

       if ($_POST['seatplan'] == "vip1") {
         $sp = "VIP Standing 1";
         $amount = 18000;
       } else if ($_POST['seatplan'] == "vip2") {
         $sp = "VIP Standing 2";
         $amount = 15000;
       } else if ($_POST['seatplan'] == "lowerA") {
        $sp = "Lower Box A";
        $amount = 10000;
      } else if ($_POST['seatplan'] == "lowerB") {
        $sp = "Lower Box B";
        $amount = 8000;
      } else if ($_POST['seatplan'] == "upperBox") {
        $sp = "Upper Box";
        $amount = 5000;
      } else if ($_POST['seatplan'] == "genAd") {
        $sp = "Gen Ad";
        $amount = 3000;
      } else {
        echo "Please choose a seat plan";
      }

       if ($_POST['quantity'] != 1 && $_POST['quantity'] > 5)
         echo "<h4>Only Maximum Of 5 Ticket per chosen Seat Plan, <br> Please Try again ... </h4><br><br>" . '<button onclick="history.back()">Go Back</button>';
       else {
         $quan = (int)$_POST['quantity'];
         echo "<p>TICKET QUANTITY: $quan </p>";
       }
       if ($_POST['payment'] == "Cash")
       $ta = $amount * $quan;
       else if ($_POST['payment'] == "Card")
         $ta = ($amount + ($amount * 0.05))*$quan;
       else if ($_POST['payment'] == "Ewallet")
         $ta = ($amount + ($amount * 0.02))*$quan;
       else
         $ta = "no selected type of payment";
       $pay = $_POST['payment'];
       echo "<p>CHOSEN SEAT PLAN: $sp </p>";
       echo "<p>PAYMENT METHOD: $pay </p>";
       echo "<p>TOTAL AMOUNT: ".  number_format($ta, 2) . "</p>";
       echo '<hr color="white"><br>';
       echo '<form action="TechnologyHamster-TicketBuyingPage.php" method="post">';
       echo '<center><input type="submit" value="Buy Another Ticket"></center><br><br>';
     }

     include('mysql_connect.php');
     $sql = "INSERT INTO TBCustomer (Name, Contact_No, SeatPlan, Payment_method, Account_Num, Total_Amount) 
     VALUES ('$name','$conNum','$sp','$pay',$accnum,'$ta');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

    ?>
                     <br><br>
  </div>
                  
        </header>

        <style>

        </style>