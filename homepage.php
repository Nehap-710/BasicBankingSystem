<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edge Trust Bank</title>

    <!-- CSS CODE -->
    <style type="text/css">
        *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

        body{
            background: rgba(0,0,0,0.5) url("images/bg.png") no-repeat;
    background-position: center;
    background-size: cover;
    min-height: 100vh;
    overflow: hidden;
    background-blend-mode: overlay;
        }
        .content{
    max-width: 50%;
    color: #fff;
    padding-top: 220px;
    margin-left: 350px;
}

.content h1{
    font-size: 42px;
    margin-left: 30px;
}

.content p{
    font-size: 20px;
    font-weight: 300;
    padding-top: 30px;
    text-align: center;
}

.content .btn-group{
    padding-top: 50px;
    margin-left: 250px;
}

.content a{
    display: inline-block;
    padding: 15px 45px;
    text-decoration: none;
    color: rgb(0, 0, 0);
    border-radius: 50px;
}

.content a.color1{
    background-color: #1dffdd;
}
    </style>
</head>
<body>
    <?php
        include 'navbar.php';
    ?>
    <div class="content">
        <h1>Money Makes The World Go Round</h1>
        <p>Make the money around the world like a pro. You can send upto amazing amount of money for a cost of nothing.</p>
        <div class="btn-group" >
            <a class="color1" href="transfermoney.php">Make A Transfer</a>
        </div>
    </div>
</body>
</html>