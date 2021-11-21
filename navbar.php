<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS CODE -->
    <style type="text/css">

*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

        header{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background: linear-gradient(to top, transparent, rgba(0,0,0,0.6));
}

img{
    height: 75px;
    padding-top: 0px;
    padding-left: 120px;
}

header .menu{
    float: right;
    margin-top: 5px;
    padding: 25px 80px;
}

header ul li{
    display: inline-block;
}

header ul li a{
    text-decoration: none;
    font-size: 16px;
    color: #fff;
    margin: 0 25px;
    font-weight: 300;
    text-transform: uppercase;
}

    </style>
</head>
<body>
    <header> 
        <div class="logo"><img src="images/logo.svg" alt="logo">
            <div class="menu">
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="transfermoney.php">View Customers</a></li>
                    <li><a href="transfermoney.php">Transfer Money</a></li>
                    <li><a href="transferhistory.php">Transfer History</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>       
    </header>
</body>
</html>