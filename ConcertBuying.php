<!DOCTYPE html>
<html>
    <head>
        <title>
            Adrian Odango Creations
        </title>
        <link rel="stylesheet" href="ConcertBuying.css">
    </head>
    <body>
        <header>
            <div class="main">
                <div class="logo">
                    <img src="https://i.ibb.co/LRNc0nL/picturetopeople-org-dd301518
                    bb0d8ea79e6f8cc99eb6c75ddc97b723680f1e1777.png">
                </div>
                <ul>
                    <li><a href="ConcertBuying.php">Buy tickets</a></li>
                    <li><a href="Concertfront.html">Logout</a></li>
                </ul>
            </div>
            <div class="title">
                <form action="ConcertBuyConfirm.php" method="post">
                <h2>Technology Hamster Ticketing System </h2><br>
            <p>NAME :</p>
            <input type="text" name="name"placeholder="Enter Name">
            <p>CONTACT NUMBER:</p>
            <input type="text" name="contactnum"placeholder="Enter Your Contact Number Ex. 09128955307" minlength="11">
            <p>SEAT PLAN</p><br>
            <center><select class="seatplan" name="seatplan" size="2">  
                <option value="vip1"> VIP Standing 1 ------> 18,000.00 PHP</option>  
                <option value="vip2"> VIP Standing 2 ---> 15,000.00 PHP</option>  
                <option value="lowerA"> Lower Box A ---> 10,000.00 PHP</option>
                <option value="lowerB"> Lower Box B ------> 8,000.00 PHP</option>  
                <option value="upperBox"> Upper Box ---> 5,000.00 PHP</option>  
                <option value="genAd"> Gen Ad ---> 3,000.00 PHP</option>  
            </select></center><br>
            <p>Quantity</p><br>
            <input type="number" name="quantity" min="1" max="5">
            <p>PAYMENT METHOD</p><br>
            <center><select name="payment" size="2">  
                <option value="Card"> Card</option>  
                <option value="Cash"> Cash</option>  
                <option value="Ewallet"> E-Wallet</option>  
            </select></center><br>
            <p>ACCOUNT NUMBER:</p><br>
            <input type="password" name="accnum" placeholder="Enter Your Account Number" maxlength="8">
            <center>
            <input type="submit" value="Proceed" name="Purchase"> 
            <input type="reset" value="Clear">
</center>
</form>

                     <br><br>
                      </div>
                  
        </header>